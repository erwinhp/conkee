@extends('templates')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Cetak</h4>
                </div>
                <form id="filterForm" action="{{ route('cetak.pks') }}" method="GET">
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Masukan Nomor Agenda" name="agenda" id="agenda" aria-label="Agenda">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="flaticon-381-search-2"></i> Search
                            </button>
                        </div>
                    </div>
                      <br>
                      <br>
                    </form>
                    {{-- <div class="basic-form">
                        <button id="generate-pdf" class="btn btn-primary">Generate PDF</button>
                        <button id="generate-pdfrek" class="btn btn-primary">Generate PDF Rekening</button>
                    </div> --}}
                    @if (isset($pksRecord))
                    <button id="generate-pdf" type="button" class="btn btn-primary">BA Kesepakatan Biaya Permohonan</button>
                    <button id="generate-pdfuserup3" type="button" class="btn btn-primary">BA Tindak Lanjut Permohonan Pelanggan</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>

function transformUP3(value) {
            return value
                .replace('up3', 'UP3')
                .replace('_', ' ')
                .split(' ')
                .map((word, index) => index === 0 ? word : word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
                .join(' ');
        }
//GENERATE PDF ALL BANK USER & UP3
document.getElementById('generate-pdf').addEventListener('click', () => {
    const pksRecord = @json($pksRecord);
    const bankData = @json($bankData);
    console.log(pksRecord);
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    const up3label = transformUP3(pksRecord.up3);
    // Load the first image
    const img = new Image();
    img.src = '{{ asset('images/header1.png') }}';

    // Load the second image
    const img2 = new Image();
    img2.src = '{{ asset('images/header2.png') }}';


    // Load the stempel image pelanggan
    const stempeluser = new Image();
    stempeluser.src = '{{ asset("storage") }}' +'/'+ pksRecord.stempel;

    // Load the ttd pelanggan
    const ttduser = new Image();
    ttduser.src = '{{ asset("storage") }}' +'/'+ pksRecord.ttd;

    // Load the stempel image
    const stempelup3 = new Image();
    stempelup3.src = '{{ asset("storage") }}' +'/'+ pksRecord.stempel_up3;

    // Load the ttd image
    const ttdup3 = new Image();
    ttdup3.src = '{{ asset("storage") }}' +'/'+ pksRecord.ttd_up3;



    // Stemple bank
    const stempelbank = new Image();
    stempelbank.src = '{{ asset("storage") }}' +'/'+ bankData.stempel;

    // Load the ttd image
    const ttdbank = new Image();
    ttdbank.src = '{{ asset("storage") }}' +'/'+ bankData.ttd;

    let imagesLoaded = 0;

    const checkImagesLoaded = () => {
        imagesLoaded++;
        if (imagesLoaded === 4) {
            // Add the images to the PDF with compression
            doc.addImage(img, 'PNG', 0, 0, 190, 15, undefined, 'FAST');
            doc.addImage(img2, 'PNG', 180, 15, 25, 15, undefined, 'FAST');

            // Center and bold the main header text
            const mainHeaderText = "BERITA ACARA KESEPAKATAN BIAYA PERMOHONAN";
            doc.setFontSize(14);
            doc.setFont("helvetica", "bold");
            const pageWidth = doc.internal.pageSize.getWidth();
            const mainHeaderTextWidth = doc.getTextWidth(mainHeaderText);
            const mainHeaderTextX = (pageWidth - mainHeaderTextWidth) / 2;
            doc.text(mainHeaderText, mainHeaderTextX, 40);





//==========================================DATE PROCESSING==================================
            const dateString = pksRecord.tanggal_approve_bank; // Your date string in yyyy-mm-dd format

            // Split the date string
            const [year, month, day] = dateString.split('-').map(Number);

            // Create a new Date object
            const date = new Date(year, month - 1, day); // Month is zero-based

            // Get the name of the day in English
            const dayNameEnglish = date.toLocaleDateString('en-US', { weekday: 'long' });

        // Translate the day name to Indonesian
        const daysInIndonesian = {
            'Sunday': 'Minggu',
            'Monday': 'Senin',
            'Tuesday': 'Selasa',
            'Wednesday': 'Rabu',
            'Thursday': 'Kamis',
            'Friday': 'Jumat',
            'Saturday': 'Sabtu'
        };

        const dayNameIndonesian = daysInIndonesian[dayNameEnglish];

        // // Log the results
        // console.log(`Year: ${year}`);
        // console.log(`Month: ${month}`);
        // console.log(`Day: ${day}`);
        // console.log(`Day Name in Indonesian: ${dayNameIndonesian}`);

            // Add the regular text
            const text = `
            Pada hari ini ${dayNameIndonesian}, tanggal ${day} bulan ${month} tahun Dua Ribu Dua Puluh Empat (${day}-${month}-${year}), yang bertanda tangan di bawah ini menyatakan hal-hal sebagai berikut :
            `;

            // Set font and size for the regular text
            doc.setFontSize(11);
            doc.setFont("helvetica", "normal");

            const startX = 10;
            const startY = 50;
            let currentY = startY;

            // Split text into lines to fit within the page
            const textLines = doc.splitTextToSize(text.trim(), 180);
            doc.text(textLines, startX, currentY);
            currentY += textLines.length * 5;

            // Numbered list items
            // console.log(pksRecord.up3)

            const items = [
                `Telah dilaksanakan pertemuan antara PT PLN (Persero) ${up3label} dengan Pelanggan ${pksRecord.pelanggan} pada tanggal ${pksRecord.tanggal} berdasarkan surat PT PLN (Persero) ${up3label} nomor ${pksRecord.surat_number}, tanggal ${pksRecord.tanggal}, perihal Undangan Tindak Lanjut Permohonan PB/PD.`,
                `Telah ditandatangani Berita Acara Tindak Lanjut Permohonan Pelanggan antara PT PLN (Persero) ${up3label} dengan Pelanggan ${pksRecord.pelanggan} pada tanggal ${pksRecord.tanggal}.`,
                `Telah dilaksanakan pertemuan antara PT PLN (Persero) ${up3label} dengan Pelanggan ${pksRecord.pelanggan} pada tanggal ${pksRecord.tanggal} berdasarkan surat PT PLN (Persero) ${up3label} nomor ${pksRecord.surat_number}, tanggal ${pksRecord.tanggal}, perihal Undangan Tindak Lanjut Program Connection Fee Keeper (Conkee).`,
                `Pelanggan ${pksRecord.nama_langganan} mengajukan penyambungan baru / penambahan daya sejumlah pelanggan dengan total daya VA dengan rincian sebagai berikut:\n    a) Nama Pemohon : ${pksRecord.nama_pemohon} \n    b) No HP Pemohon : ${pksRecord.no_hp} \n    c) No KTP Pemohon : ${pksRecord.no_ktp} \n    d) Nama Pelanggan : ${pksRecord.nama_langganan} \n    e) Alamat Pelanggan : ${pksRecord.alamat} \n    f) Biaya Penyambungan : Rp ${pksRecord.biaya_penyambungan}, -\n    g) Jaminan Langganan : Rp ${pksRecord.jaminan_langganan}, -\n    h) Token Perdana : Rp ${pksRecord.token_perdana}, -\n    i) Biaya Materai : Rp ${pksRecord.biaya_materai}, - untuk biaya penyambungan\n    j) Biaya Transaksi : Rp ${pksRecord.biaya_transaksi}, - per pelanggan (total, -) untuk biaya transaksi pembayaran biaya penyambungan listrik per pelanggan sesuai kebijakan Bank Supporting.\n    k) Biaya Permohonan : Rp ${pksRecord.biaya_permohonan}, - (total poin f s.d. j)`,
                `Pelanggan ${pksRecord.nama_langganan} berdasarkan penawaran PT PLN (Persero) ${up3label}, memutuskan untuk menggunakan program Connection Fee Keeper (Conkee) dalam melakukan Biaya Penyambungan melalui Perjanjian Kerjasama Tripartit antara PLN-Pelanggan-Bank. Dalam merealisasikan program Conkee, Pelanggan ${pksRecord.pelanggan} memilih salah satu Bank Supporting yang telah MoU dengan PT PLN (Persero) UID Kalselteng yaitu PT Bank ${pksRecord.bank}.`,
                `PT Bank ${pksRecord.bank1} akan menerbitkan nomor rekening atas nama pelanggan, dengan ketentuan hak akses sebagai berikut:\n    a) Pelanggan hanya dapat melakukan transaksi transfer dana ke Rekening tersebut.\n    b) Bank memproses pemindahbukuan Biaya Permohonan atas instruksi PLN.\n    c) Selama masa Perjanjian, Bank akan memblokir dana yang telah dimasukkan Pelanggan ke Rekening tersebut, dan hanya ditransaksikan sesuai instruksi PLN.\n    d) Setelah masa Perjanjian berakhir, Bank akan membuka blokir dana dan menutup Rekening Pelanggan tersebut.\n    e) Apabila terdapat sisa saldo pada Rekening, maka akan dipindahbukukan ke Rekening Pelanggan lainnya yang akan dituangkan dalam PKS Conkee dan/atau Berita Acara Pengakhiran Perjanjian.`,
                `Selanjutnya, setelah penerbitan Nomor Rekening sebagaimana dimaksud pada Poin 6, akan ditindaklanjuti dengan penandatanganan Perjanjian Kerjasama antara PLN-Pelanggan-Bank, dengan total Biaya Permohonan yang akan disetorkan Pelanggan ke Rekening tersebut (Poin 4 huruf k) yaitu sebesar Rp ${pksRecord.biaya_permohonan}, -`
            ];

                    items.forEach((item, index) => {
                const itemNumber = `${index + 1}. `;
                const itemText = doc.splitTextToSize(item.trim(), 170 - doc.getTextWidth(itemNumber));

                doc.text(itemNumber, startX, currentY);
                doc.text(itemText, startX + doc.getTextWidth(itemNumber), currentY);

                currentY += itemText.length * 5;
            });

            // Move to the next page
            doc.addPage();

            // Add the images to the new page with compression
            doc.addImage(img, 'PNG', 0, 0, 190, 15, undefined, 'FAST');
            doc.addImage(img2, 'PNG', 180, 15, 25, 15, undefined, 'FAST');

            // Center and bold the main header text on the new page
            doc.setFontSize(14);
            doc.setFont("helvetica", "bold");
            doc.text(mainHeaderText, mainHeaderTextX, 40);

            // Add the final statement
            const finalStatement = "Demikian Berita Acara ini dibuat untuk dipergunakan sebagaimana mestinya.";
            doc.setFontSize(11);
            doc.setFont("helvetica", "normal");
            doc.text(finalStatement, startX, 50);

            // Add signature spaces
            const signaturesY = 100;
            const signatureGap = 60;
            const signatureLabelY = signaturesY;
            const signatureNameY = signaturesY + 40;  // Adjusted the gap to 40

            const signatures = [
                { label: "Pelanggan", name: pksRecord.nama_pemohon, x: startX },
                { label: "PT Bank", name: bankData.nama_kepala_cabang, x: startX + signatureGap + 5 },
                { label: "PT PLN (Persero) UP3", name: up3label , x: startX + 2 * (signatureGap + 5) }
            ];

            signatures.forEach(signature => {
                const labelWidth = doc.getTextWidth(signature.label);
                const nameWidth = doc.getTextWidth(signature.name);
                const labelX = signature.x + (signatureGap - labelWidth) / 2;
                const nameX = signature.x + (signatureGap - nameWidth) / 2;
                doc.text(signature.label, labelX, signatureLabelY);
                doc.text(signature.name, nameX, signatureNameY);
            });
            // =============================add ttd up3====================================
            // Add ttd and stempel images in the signature space with compression signature and stemple image from here
            // const signatureImageX = startX + 17; this one for the pelanggan
            const signatureImageX = startX + 147;
            const signatureImageY = signaturesY + 10;
            const signatureImageWidth = 25;
            const signatureImageHeight = 25;

            // // Add ttd first
            // doc.addImage(ttdup3, 'PNG', signatureImageX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');
            // // Add stempel on top of ttd
            // doc.addImage(stempelup3, 'PNG', signatureImageX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');
            //             // =============================add ttd user====================================
            // // Add ttd and stempel images in the signature space with compression signature and stemple image from here
            // // const signatureImageX = startX + 17; this one for the pelanggan
            // const signatureImageuserX = startX + 17;
            // // Add ttd first
            // doc.addImage(ttduser, 'PNG', signatureImageuserX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');
            // // Add stempel on top of ttd
            // doc.addImage(stempeluser, 'PNG', signatureImageuserX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');

            // const signatureImagebankX = startX + 83;

            // doc.addImage(ttdbank, 'PNG', signatureImagebankX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');
            // // Add stempel on top of ttd
            // doc.addImage(stempelbank, 'PNG', signatureImagebankX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');

            // Save the PDF
            doc.save('a4.pdf');
        }
    };

    img.onload = checkImagesLoaded;
    img2.onload = checkImagesLoaded;
    stempeluser.onload = checkImagesLoaded;
    ttduser.onload = checkImagesLoaded;

    img.onerror = function () {
        console.error('Could not load the first image.');
    };

    img2.onerror = function () {
        console.error('Could not load the second image.');
    };

    stempeluser.onerror = function () {
        console.error('Could not load the stempel image.');
    };

    ttduser.onerror = function () {
        console.error('Could not load the ttd image.');
    };
});



//GENERATE PDF USER & UP3===============================================================

document.getElementById('generate-pdfuserup3').addEventListener('click', () => {
    const pksRecord = @json($pksRecord);
    const bankData = @json($bankData);
    console.log(pksRecord);
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    const up3label = transformUP3(pksRecord.up3);


    const dateString = pksRecord.tanggal_approve_up3; // Your date string in yyyy-mm-dd format

    // Split the date string
    const [year, month, day] = dateString.split('-').map(Number);

    // Create a new Date object
    const date = new Date(year, month - 1, day); // Month is zero-based

    // Get the name of the day in English
    const dayNameEnglish = date.toLocaleDateString('en-US', { weekday: 'long' });

    // Translate the day name to Indonesian
    const daysInIndonesian = {
    'Sunday': 'Minggu',
    'Monday': 'Senin',
    'Tuesday': 'Selasa',
    'Wednesday': 'Rabu',
    'Thursday': 'Kamis',
    'Friday': 'Jumat',
    'Saturday': 'Sabtu'
    };

const dayNameIndonesian = daysInIndonesian[dayNameEnglish];

    // Load the first image
    const img = new Image();
    img.src = '{{ asset('images/header1.png') }}';

    // Load the second image
    const img2 = new Image();
    img2.src = '{{ asset('images/header2.png') }}';

    // Load the stempel image pelanggan
    const stempeluser = new Image();
    stempeluser.src = '{{ asset("storage") }}' + '/' + pksRecord.stempel;

    // Load the ttd pelanggan
    const ttduser = new Image();
    ttduser.src = '{{ asset("storage") }}' + '/' + pksRecord.ttd;

    // Load the stempel image
    const stempelup3 = new Image();
    stempelup3.src = '{{ asset("storage") }}' + '/' + pksRecord.stempel_up3;

    // Load the ttd image
    const ttdup3 = new Image();
    ttdup3.src = '{{ asset("storage") }}' + '/' + pksRecord.ttd_up3;

    let imagesLoaded = 0;

    const checkImagesLoaded = () => {
        imagesLoaded++;
        if (imagesLoaded === 4) {
            // Add the images to the PDF with compression
            doc.addImage(img, 'PNG', 0, 0, 190, 15, undefined, 'FAST');
            doc.addImage(img2, 'PNG', 180, 15, 25, 15, undefined, 'FAST');

            // Center and bold the main header text
            const mainHeaderText = "BERITA ACARA TINDAK LANJUT PERMOHONAN PELANGGAN";
            doc.setFontSize(14);
            doc.setFont("helvetica", "bold");
            const pageWidth = doc.internal.pageSize.getWidth();
            const mainHeaderTextWidth = doc.getTextWidth(mainHeaderText);
            const mainHeaderTextX = (pageWidth - mainHeaderTextWidth) / 2;
            doc.text(mainHeaderText, mainHeaderTextX, 40);

            // Add the regular text
            const text = `
            Pada hari ini ${dayNameIndonesian}, tanggal ${day} bulan ${month} tahun Dua Ribu Dua Puluh Empat (${day}-${month}-${year}), yang bertanda tangan di bawah ini menyatakan hal-hal sebagai berikut :
            `;

            // Set font and size for the regular text
            doc.setFontSize(11);
            doc.setFont("helvetica", "normal");

            const startX = 10;
            const startY = 50;
            let currentY = startY;

            // Split text into lines to fit within the page
            const textLines = doc.splitTextToSize(text.trim(), 180);
            doc.text(textLines, startX, currentY);
            currentY += textLines.length * 5;



            const items = [
                `Telah dilaksanakan pertemuan antara PT PLN (Persero) ${up3label} dengan Pelanggan ${pksRecord.pelanggan} pada tanggal ${pksRecord.tanggal_approve_up3} berdasarkan surat PT PLN (Persero) ${up3label} nomor ${pksRecord.no_pks}, tanggal ${pksRecord.tanggal}, perihal Undangan Tindak Lanjut Permohonan PB/PD.`,
                `Pelanggan ${pksRecord.nama_langganan} mengajukan penyambungan baru / penambahan daya ${pksRecord.detil} pelanggan dengan total daya …  VA dengan rincian sebagai berikut:
                \n a)Nama Pemohon    : ${pksRecord.nama_pemohon}
                \n b)No HP Pemohon   : ${pksRecord.no_hp}
                \n c)No KTP Pemohon  :${pksRecord.no_ktp}
                \n d)Nama Pelanggan   :${pksRecord.nama_langganan}
                \n e)Alamat Pelanggan :${pksRecord.alamat}
                \n f)Peruntukan       :${pksRecord.detil}`,
                `PLN menyampaikan dokumen yang dibutuhkan dalam penyambungan sebagai berikut:
                \n a)Fotokopi KTP Pemohon 
                \n b)Fotokopi NPWP Pemohon 
                \n c)SLO Per Pelanggan
                \n d)2 Lembar Materai per Pelanggan(untuk SPJBTL)`,
                `PLN menyampaikan Biaya Penyambungan sebagaimana permohonan pada Poin 2 sebesar:
                \n a)	Besaran Biaya Penyambungan diatur dalam Peraturan Menteri Energi dan Sumber Daya Mineral Republik Indonesia Nomor 27 Tahun 2017 tentang Tingkat Mutu Pelayanan dan Biaya yang Terkait dengan Penyaluran Tenaga Listrik oleh PT Perusahaan Listrik Negara (Persero), serta diatur dalam Peratutan Pemerintah Republik Indonesia Nomor 48 Tahun 2020 tentang Perubahan atas Peraturan pemerintah Nomor 81 Tahun 2015 tentang Impor dan/atau Penyerahan Barang Kena Pajak Tertentu yang Bersifat Strategis yang Dibebaskan dari Pengenaan Pajak Pertambahan Nilai.
                \n b)	Biaya Penyambungan	:	Rp ${pksRecord.biaya_penyambungan},-
                \n c)	Jaminan Langganan	 :	Rp ${pksRecord.jaminan_langganan},-
                \n d)	Token Perdana	     :	Rp ${pksRecord.token_perdana},-
                \n e)	Biaya Materai	     :	Rp ${pksRecord.biaya_materai},- untuk biaya penyambungan
                \n f)	Biaya Transaksi Pembayaran Biaya Penyambungan Listrik per Pelanggan sesuai Kebijakan Bank Supporting.`,
                `Pelanggan ${pksRecord.nama_langganan} berdasarkan penawaran PT PLN (Persero) ${up3label} , memutuskan untuk menggunakan program Connection Fee Keeper (Conkee) dalam melakukan Biaya Penyambungan melalui Perjanjian Kerjasama Tripartit antara PLN-Pelanggan-Bank.`,
                `Dalam merealisasikan program Conkee, Pelanggan ${pksRecord.nama_langganan} memilih salah satu Bank Supporting yang telah MoU dengan PT PLN (Persero) UID Kalselteng yaitu:
                \n a)PT Bank Syariah Indonesia Tbk (0015.MoU/AGA.04.01/F13000000/2023), Saldo minimal buka rekening: Rp 50.000, Biaya per transaksi non taglis Rp 3.000
                \n b)PT Bank Mandiri (Persero) Tbk (0018.MoU/AGA.04.01/F13000000/2023), Saldo minimal buka rekening bisnis: Rp 1.000.000, Saldo minimal buka rekening tabungan: Rp 500.000, Biaya per transaksi non taglis Rp 3.000
                \n c)PT Bank Rakyat Indonesia (Persero) Tbk (0019.MoU/AGA.04.01/F13000000/2023), Saldo minimal buka rekening bisnis: Rp 1.000.000, Saldo minimal buka rekening tabungan: Rp 250.000, Biaya per transaksi non taglis Rp 3.000
                \n d)PT BPD Kalimantan Selatan (0020.MoU/AGA.04.01/F13000000/2023), Saldo minimal buka rekening giro: Rp 1.000.000 (admin Rp 25.000), Saldo minimal buka rekening tabungan: Rp 50.000 (admin Rp 10.000), Biaya per transaksi non taglis Rp 3.000
                \n e)PT BPD Kalimantan Tengah (0021.MoU/AGA.04.01/F13000000/2023), Saldo minimal buka rekening giro: Rp 100.000, Biaya per transaksi taglis Rp 2.500
                \n f)PT Bank Negara Indonesia (Persero) Tbk (0022.MoU/AGA.04.01/F13000000/2023), Saldo minimal buka rekening bisnis: Rp 1.000.000, Saldo minimal buka rekening tabungan: Rp 250.000, Biaya per transaksi non taglis Rp 3.000`,
            ];

            const addItems = (items, startX, currentY) => {
                const pageHeight = doc.internal.pageSize.getHeight();
                const itemsPerPage = Math.ceil(items.length / 2);
                let itemsAdded = 0;
                
                items.forEach((item, index) => {
                    if (index === itemsPerPage) {
                        doc.addPage();
                        doc.addImage(img, 'PNG', 0, 0, 190, 15, undefined, 'FAST');
                        doc.addImage(img2, 'PNG', 180, 15, 25, 15, undefined, 'FAST');
                        doc.setFontSize(14);
                        doc.setFont("helvetica", "bold");
                        doc.text(mainHeaderText, mainHeaderTextX, 40);
                        doc.setFontSize(11);
                        doc.setFont("helvetica", "normal");
                        currentY = 50;  // Reset currentY for new page
                    }

                    const itemNumber = `${index + 1}. `;
                    const itemText = doc.splitTextToSize(item.trim(), 170 - doc.getTextWidth(itemNumber));
                    doc.text(itemNumber, startX, currentY);
                    doc.text(itemText, startX + doc.getTextWidth(itemNumber), currentY);

                    currentY += itemText.length * 5 + 5;  // Add some spacing between items
                    itemsAdded++;
                });
                return currentY;
            };

            currentY = addItems(items, startX, currentY);

            // Add the final statement
            const finalStatement = "Demikian Berita Acara ini dibuat untuk dipergunakan sebagaimana mestinya.";
            doc.setFontSize(11);
            doc.setFont("helvetica", "normal");
            if (currentY + 20 > doc.internal.pageSize.getHeight() - 50) {
                doc.addPage();
                doc.addImage(img, 'PNG', 0, 0, 190, 15, undefined, 'FAST');
                doc.addImage(img2, 'PNG', 180, 15, 25, 15, undefined, 'FAST');
                doc.setFontSize(14);
                doc.setFont("helvetica", "bold");
                doc.text(mainHeaderText, mainHeaderTextX, 40);
                doc.setFontSize(11);
                doc.setFont("helvetica", "normal");
                currentY = 50;
            }
            doc.text(finalStatement, startX, currentY + 10);

            // Add signature spaces
            const signaturesY = currentY + 40;
            const signatureGap = 60;
            const signatureLabelY = signaturesY;
            const signatureNameY = signaturesY + 30;  // Adjusted the gap to 30

            const signatures = [
                { label: "Pelanggan", name: pksRecord.nama_pemohon , x: startX },
                { label: "PT PLN (Persero) UP3", name: up3label, x: startX + 2 * (signatureGap + 5) }
            ];

            signatures.forEach(signature => {
                const labelWidth = doc.getTextWidth(signature.label);
                const nameWidth = doc.getTextWidth(signature.name);
                const labelX = signature.x + (signatureGap - labelWidth) / 2;
                const nameX = signature.x + (signatureGap - nameWidth) / 2;
                doc.text(signature.label, labelX, signatureLabelY);
                doc.text(signature.name, nameX, signatureNameY);
            });

            // Add ttd and stempel images in the signature space with compression
            const signatureImageY = signaturesY + 10;
            const signatureImageWidth = 25;
            const signatureImageHeight = 25;

            const signatureImageuserX = startX + 17;
            // doc.addImage(ttduser, 'PNG', signatureImageuserX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');
            // doc.addImage(stempeluser, 'PNG', signatureImageuserX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');

            // const signatureImageX = startX + 147;
            // doc.addImage(ttdup3, 'PNG', signatureImageX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');
            // doc.addImage(stempelup3, 'PNG', signatureImageX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');

            // Save the PDF
            doc.save('a4.pdf');
        }
    };

    // Check if images are loaded before proceeding
    img.onload = checkImagesLoaded;
    img2.onload = checkImagesLoaded;
    stempeluser.onload = checkImagesLoaded;
    ttduser.onload = checkImagesLoaded;
    stempelup3.onload = checkImagesLoaded;
    ttdup3.onload = checkImagesLoaded;
});

</script>
@endsection