@extends('templates')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Cetak</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <button id="generate-pdf" class="btn btn-primary">Generate PDF</button>
                        <button id="generate-pdfrek" class="btn btn-primary">Generate PDF Rekening</button>
                    </div>
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
document.getElementById('generate-pdf').addEventListener('click', () => {
    const pksRecord = @json($pksRecord[0]);
    console.log(pksRecord);
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

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
    const stempel = new Image();
    stempel.src = '{{ asset('storage/stempel/LgcK7JlOtYzeQxFB7QVUlVIuqS2Mc05qEUS79wUy.png') }}';

    // Load the ttd image
    const ttd = new Image();
    ttd.src = '{{ asset('storage/ttd/ESpEi4wnX9BWkz7gDyKlxDqjQLL3dYss0JSW6MZM.png') }}';

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

            // Add the regular text
            const text = `
            Pada hari ini … , tanggal … bulan … tahun Dua Ribu Dua Puluh Tiga (… -… -2023), yang bertanda tangan di bawah ini menyatakan hal-hal sebagai berikut :
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
            console.log(pksRecord.up3)

            const items = [
                `Telah dilaksanakan pertemuan antara PT PLN (Persero) ${pksRecord.up3} dengan Pelanggan ${pksRecord.pelanggan} pada tanggal ${pksRecord.tanggal} berdasarkan surat PT PLN (Persero) ${pksRecord.up3} nomor ${pksRecord.surat_number}, tanggal ${pksRecord.tanggal}, perihal Undangan Tindak Lanjut Permohonan PB/PD.`,
                `Telah ditandatangani Berita Acara Tindak Lanjut Permohonan Pelanggan antara PT PLN (Persero) ${pksRecord.up3} dengan Pelanggan ${pksRecord.pelanggan} pada tanggal ${pksRecord.tanggal}.`,
                `Telah dilaksanakan pertemuan antara PT PLN (Persero) ${pksRecord.up3} dengan Pelanggan ${pksRecord.pelanggan} pada tanggal ${pksRecord.tanggal} berdasarkan surat PT PLN (Persero) ${pksRecord.up3} nomor ${pksRecord.surat_number}, tanggal ${pksRecord.tanggal}, perihal Undangan Tindak Lanjut Program Connection Fee Keeper (Conkee).`,
                `Pelanggan ${pksRecord.nama_langganan} mengajukan penyambungan baru / penambahan daya sejumlah pelanggan dengan total daya VA dengan rincian sebagai berikut:\n    a) Nama Pemohon : ${pksRecord.nama_pemohon} \n    b) No HP Pemohon : ${pksRecord.no_hp} \n    c) No KTP Pemohon : ${pksRecord.no_ktp} \n    d) Nama Pelanggan : ${pksRecord.nama_langganan} \n    e) Alamat Pelanggan : ${pksRecord.alamat} \n    f) Biaya Penyambungan : Rp ${pksRecord.biaya_penyambungan}, -\n    g) Jaminan Langganan : Rp ${pksRecord.jaminan_langganan}, -\n    h) Token Perdana : Rp ${pksRecord.token_perdana}, -\n    i) Biaya Materai : Rp ${pksRecord.biaya_materai}, - untuk biaya penyambungan\n    j) Biaya Transaksi : Rp ${pksRecord.biaya_transaksi}, - per pelanggan (total, -) untuk biaya transaksi pembayaran biaya penyambungan listrik per pelanggan sesuai kebijakan Bank Supporting.\n    k) Biaya Permohonan : Rp ${pksRecord.total_biaya_permohonan}, - (total poin f s.d. j)`,
                `Pelanggan ${pksRecord.nama_langganan} berdasarkan penawaran PT PLN (Persero) ${pksRecord.up3}, memutuskan untuk menggunakan program Connection Fee Keeper (Conkee) dalam melakukan Biaya Penyambungan melalui Perjanjian Kerjasama Tripartit antara PLN-Pelanggan-Bank. Dalam merealisasikan program Conkee, Pelanggan ${pksRecord.pelanggan} memilih salah satu Bank Supporting yang telah MoU dengan PT PLN (Persero) UID Kalselteng yaitu PT Bank ${pksRecord.bank}.`,
                `PT Bank ${pksRecord.bank1} akan menerbitkan nomor rekening atas nama pelanggan, dengan ketentuan hak akses sebagai berikut:\n    a) Pelanggan hanya dapat melakukan transaksi transfer dana ke Rekening tersebut.\n    b) Bank memproses pemindahbukuan Biaya Permohonan atas instruksi PLN.\n    c) Selama masa Perjanjian, Bank akan memblokir dana yang telah dimasukkan Pelanggan ke Rekening tersebut, dan hanya ditransaksikan sesuai instruksi PLN.\n    d) Setelah masa Perjanjian berakhir, Bank akan membuka blokir dana dan menutup Rekening Pelanggan tersebut.\n    e) Apabila terdapat sisa saldo pada Rekening, maka akan dipindahbukukan ke Rekening Pelanggan lainnya yang akan dituangkan dalam PKS Conkee dan/atau Berita Acara Pengakhiran Perjanjian.`,
                `Selanjutnya, setelah penerbitan Nomor Rekening sebagaimana dimaksud pada Poin 6, akan ditindaklanjuti dengan penandatanganan Perjanjian Kerjasama antara PLN-Pelanggan-Bank, dengan total Biaya Permohonan yang akan disetorkan Pelanggan ke Rekening tersebut (Poin 4 huruf k) yaitu sebesar Rp ${pksRecord.total_biaya_permohonan}, -`
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
                { label: "Pelanggan", name: "Name", x: startX },
                { label: "PT Bank", name: "Name", x: startX + signatureGap + 5 },
                { label: "PT PLN (Persero) UP3", name: "Name", x: startX + 2 * (signatureGap + 5) }
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

            // Add ttd first
            doc.addImage(ttduser, 'PNG', signatureImageX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');
            // Add stempel on top of ttd
            doc.addImage(stempeluser, 'PNG', signatureImageX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');
                        // =============================add ttd user====================================
            // Add ttd and stempel images in the signature space with compression signature and stemple image from here
            // const signatureImageX = startX + 17; this one for the pelanggan
            const signatureImageuserX = startX + 17;
            // Add ttd first
            doc.addImage(ttd, 'PNG', signatureImageuserX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');
            // Add stempel on top of ttd
            doc.addImage(stempel, 'PNG', signatureImageuserX, signatureImageY, signatureImageWidth, signatureImageHeight, undefined, 'FAST');


            // Save the PDF
            doc.save('a4.pdf');
        }
    };

    img.onload = checkImagesLoaded;
    img2.onload = checkImagesLoaded;
    stempel.onload = checkImagesLoaded;
    ttd.onload = checkImagesLoaded;

    img.onerror = function () {
        console.error('Could not load the first image.');
    };

    img2.onerror = function () {
        console.error('Could not load the second image.');
    };

    stempel.onerror = function () {
        console.error('Could not load the stempel image.');
    };

    ttd.onerror = function () {
        console.error('Could not load the ttd image.');
    };
});














//==============================pembuatan rekening bank=================================
document.getElementById('generate-pdfrek').addEventListener('click', () => {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        const pksRecord = @json($pksRecord[0]);
        // Load the images
        const ttduser = new Image();
        ttduser.src = '{{ asset("storage") }}'+'/'+ pksRecord.ttd;

        const stempel = new Image();
        stempel.src = '{{ asset("storage") }}'+'/' + pksRecord.stempel;

        let imagesLoaded = 0;

        const checkImagesLoaded = () => {
            imagesLoaded++;
            if (imagesLoaded === 2) {
                // Set font and size for the text
                doc.setFontSize(12);
                doc.setFont("helvetica", "normal");

                const startX = 20;
                let currentY = 30;

                // Add the static and dynamic text
                const provinceText = `${pksRecord.provinsi}, ${pksRecord.updated_at}`;
                const bankText = `PT Bank ${pksRecord.bank}`;
                const accountText = `
Kepada :
${pksRecord.bank1}

Perihal : Permohonan Pembuatan Rekening Connection Fee Keeper

Memperhatikan Berita Acara Kesepakatan Biaya Permohonan tanggal ${pksRecord.updated_at} (terlampir);

Bersama ini kami memohon pihak Bank untuk dapat menerbitkan Rekening tanpa Buku Tabungan dan tanpa Kartu ATM sebagai berikut:

Nama Rekening    : Pelanggan ${pksRecord.nama_langganan}
Keperluan Pembukaan Rekening : Transaksi Biaya Permohonan Pasang Baru/ Penambahan Daya
Ketentuan Akses Rekening : sesuai Berita Acara Kesepakatan Biaya Permohonan

Demikian yang dapat kami sampaikan, atas kerjasamanya diucapkan terima kasih.


Pelanggan ${pksRecord.nama_langganan},

`;

                // Split text into lines to fit within the page
                const provinceTextLines = doc.splitTextToSize(provinceText.trim(), 180);
                const accountTextLines = doc.splitTextToSize(accountText.trim(), 180);

                // Add province text
                doc.text(provinceTextLines, startX, currentY);
                currentY += provinceTextLines.length * 5 + 10;

                // Add account text
                doc.text(accountTextLines, startX, currentY);
                currentY += accountTextLines.length * 5 + 20;

                // Add images for signatures and stamp
                const signatureStartX = startX;
                const signatureStartY = 140;

                doc.addImage(ttduser, 'PNG', signatureStartX, signatureStartY, 40, 20,undefined, 'FAST');
                doc.addImage(stempel, 'PNG', signatureStartX, signatureStartY, 40, 20,undefined, 'FAST');

                // Save the PDF
                doc.save('output.pdf');
            }
        };

        ttduser.onload = checkImagesLoaded;
        stempel.onload = checkImagesLoaded;
    });


</script>
@endsection