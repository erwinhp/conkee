@extends('templatesbank')
@section('content')


@php
$id_pks = request()->get('id_pks');
$isDisabled = function($pks) {
return isset($pks) && $pks->nomor_akun_bank == 0 ? 'disabled' : '';
};



$isDisabledform = function($pks) {
return isset($pks) && $pks->nomor_akun_bank != 0 ? 'disabled' : '';
};
@endphp
<div class="container">
    <div class="d-flex justify-content-end">
        <button type="submit" id="generate-pdfrek" class="btn btn-primary" {{ $isDisabled($pks) }}>Cetak Permohonan</button>
    </div>
    <br><br>
        <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Input Account Number Bank </h4> 
                    {{-- {{$user->usertype}} --}}
                </div>
                <div class="card-body">
                    <div class="basic-form">
                <!-- resources/views/upload.blade.php -->
                <form action="{{ route('update.data.account') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_pks" value="{{ $id_pks }}">
                    <input type="hidden" name="bank_terpilih" value="{{ $user->usertype }}">

                    
                    <div class="form-group">
                        <label for="ttd">Nama Kantor Cabang</label>
                        <input type="text" class="form-control input-default" placeholder="Nama kantor cabang" name="nama_kantor_cabang" id="nama_kantor_cabang"  {{ $isDisabledform($pks) }}>
                    </div>

                    
                    <div class="form-group">
                        <label for="ttd">Nama Kepala Cabang</label>
                        <input type="text" class="form-control input-default" placeholder="Nama Kepala Cabang" name="nama_kepala_cabang" id="nama_kepala_cabang" {{ $isDisabledform($pks) }}>
                    </div>

                    
                    <div class="form-group">
                        <label for="ttd">Alamat Bank</label>
                        <input type="text" class="form-control input-default" placeholder="Alamat Bank" name="alamat_bank" id="alamat_bank" {{ $isDisabledform($pks) }}>
                    </div>

                    
                    <div class="form-group">
                        <label for="ttd">Nomor Telepon Bank</label>
                        <input type="text" class="form-control input-default" placeholder="Nomor Telepon Bank" name="no_telp_bank" id="no_telp_bank" {{ $isDisabledform($pks) }}>
                    </div>

                    
                    <div class="form-group">
                        <label for="ttd">No HP Kepala Cabang</label>
                        <input type="text" class="form-control input-default" placeholder="No HP Kepala Cabang" name="no_hp_kepala_cabang" id="no_hp_kepala_cabang" {{ $isDisabledform($pks) }}>
                    </div>

                    <div class="form-group">
                        <label for="ttd">Email Bank</label>
                        <input type="text" class="form-control input-default" placeholder="Email Bank" name="email_bank" id="email_bank" {{ $isDisabledform($pks) }}>
                    </div>

                    <div class="form-group">
                        <label for="ttd">No Rekening</label>
                        <input type="text" class="form-control input-default" placeholder="Nomor Rekening" name="no_rekening" id="no_rekening" {{ $isDisabledform($pks) }}>
                    </div>

                    <div class="form-group">
                        <label for="ttd">Nama Rekening</label>
                        <input type="text" class="form-control input-default" placeholder="Nama Rekening" name="nama_rekening" id="nama_rekening" {{ $isDisabledform($pks) }}>
                    </div>

                    <div class="form-group">
                        <label for="ttd">Nomor PKS</label>
                        <input type="text" class="form-control input-default" placeholder="Nomor PKS Bank" name="no_pks_bank" id="no_pks_bank" {{ $isDisabledform($pks) }}>
                    </div>

                    <div class="form-group">
                        <label for="ttd">Keterangan</label>
                        <input type="text" class="form-control input-default" placeholder="Keterangan Pihak Bank" name="keterangan" id="keterangan" {{ $isDisabledform($pks) }}>
                    </div>

                                        
                    <div class="form-group">
                        <label for="ttd">Upload TTD</label>
                        <input type="file" name="ttd" id="ttd" class="form-control" {{ $isDisabledform($pks) }}>
                    </div>

                    <div class="form-group">
                        <label for="stempel">Upload Stempel</label>
                        <input type="file" name="stempel" id="stempel" class="form-control" {{ $isDisabledform($pks) }}>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

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
document.getElementById('generate-pdfrek').addEventListener('click', () => {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        const pksRecord = @json($pks);
        
        // Extract the date using split()
        // const extractDateWithSplit = (datetime) => {
        //     return datetime.split(' ')[0];
        // };

        // const extractDateWithLocale = (datetime) => {
        // return new Date(datetime).toLocaleDateString('en-CA'); // Format to yyyy-mm-dd
        // };

        const extractAndCapitalizeCity = (up3Text) => {
            const parts = up3Text.split('_');
            const city = parts[1];
            return city.charAt(0).toUpperCase() + city.slice(1);
        };
        const unit = extractAndCapitalizeCity(pksRecord.up3);

        // const tanggal = extractDateWithLocale(pksRecord.created_at);
        // console.log(pksRecord);
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
                const provinceText = `${unit}, ${pksRecord.tanggal_approve_bank}`;
                const bankText = `PT Bank ${pksRecord.bank}`;
                const accountText = `
Kepada :
${pksRecord.bank_terpilih}

Perihal : Permohonan Pembuatan Rekening Connection Fee Keeper

Memperhatikan Berita Acara Kesepakatan Biaya Permohonan tanggal ${pksRecord.tanggal_approve_up3} (terlampir);

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