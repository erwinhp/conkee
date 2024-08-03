@extends('templatesup3')
@section('content')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
@php
$id_pks = request()->get('id_pks');
// $isDisabled = function($pks) {
// return isset($pks) && $pks->nomor_akun_bank == 0 ? 'disabled' : '';
// };



// $isDisabledform = function($pks) {
// return isset($pks) && $pks->nomor_akun_bank != 0 ? 'disabled' : '';
// };
@endphp
<script>
    function calculateTotal() {
        // Get values from the input fields and parse them as floats
        let biayaPenyambungan = parseFloat(document.getElementById('biaya_penyambungan').value) || 0;
        let jaminanLangganan = parseFloat(document.getElementById('jaminan_langganan').value) || 0;
        let tokenPerdana = parseFloat(document.getElementById('token_perdana').value) || 0;
        let biayaMaterai = parseFloat(document.getElementById('biaya_materai').value) || 0;
        let biayaTransaksi = parseFloat(document.getElementById('biaya_transaksi').value) || 0;
        
        // Calculate the total
        let total = biayaPenyambungan + jaminanLangganan + tokenPerdana + biayaMaterai + biayaTransaksi;

        // Update the biaya permohonan field with the calculated total
        document.getElementById('biaya_permohonan').value = total.toFixed(2);
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Add event listeners to input fields to trigger calculateTotal on change
        document.getElementById('biaya_penyambungan').addEventListener('input', calculateTotal);
        document.getElementById('jaminan_langganan').addEventListener('input', calculateTotal);
        document.getElementById('token_perdana').addEventListener('input', calculateTotal);
        document.getElementById('biaya_materai').addEventListener('input', calculateTotal);
        document.getElementById('biaya_transaksi').addEventListener('input', calculateTotal);
    });
</script>
<div class="container">
    {{-- <div class="d-flex justify-content-end">
        <button type="submit" id="generate-pdfrek" class="btn btn-primary">Cetak Permohonan</button>
    </div> --}}
    <br><br>
        <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Input PKS UP3 </h4> 
                    {{-- {{$user->usertype}} --}}
                </div>
                <div class="card-body">
                    <div class="basic-form">
                <!-- resources/views/upload.blade.php -->
                <form action="{{ route('up3.updatepksup3') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_pks" value="{{ $id_pks }}">
                    <div class="form-group">
                        <label for="no_pks">Nomor PKS</label>
                        <input type="text" class="form-control input-default" placeholder="Nomor PKS" name="no_pks" id="no_pks">
                    </div>
                    <div class="form-group">
                        <label for="no_pks">Biaya Penyambungan</label>
                        <input type="text" class="form-control input-default" placeholder="Masukan Biaya Penyambungan" name="biaya_penyambungan" id="biaya_penyambungan">
                    </div>
                    <div class="form-group">
                        <label for="no_pks">Jaminan langganan</label>
                        <input type="text" class="form-control input-default" placeholder="Masukan Biaya Jaminan langganan" name="jaminan_langganan" id="jaminan_langganan">
                    </div>
                    <div class="form-group">
                        <label for="no_pks">Token Perdana</label>
                        <input type="text" class="form-control input-default" placeholder="Masukan Biaya Token Perdana" name="token_perdana" id="token_perdana">
                    </div>
                    <div class="form-group">
                        <label for="no_pks">Biaya Materai</label>
                        <input type="text" class="form-control input-default" placeholder="Masukan Biaya Biaya Materai" name="biaya_materai" id="biaya_materai">
                    </div>
                    <div class="form-group">
                        <label for="no_pks">Biaya Transaksi</label>
                        <input type="text" class="form-control input-default" placeholder="Masukan Biaya Biaya Transaksi" name="biaya_transaksi" id="biaya_transaksi">
                    </div>
                    <div class="form-group">
                        <label for="no_pks">Biaya Permohonan</label>
                        <input type="text" class="form-control input-default" placeholder="Masukan Biaya Permohonan" name="biaya_permohonan" id="biaya_permohonan">
                    </div>

                    <div class="form-group">
                        <label for="no_pks">Total Daya</label>
                        <input type="text" class="form-control input-default" placeholder="Masukan Total Daya" name="total_daya" id="total_daya">
                    </div>

                    <div class="form-group">
                        <label for="no_pks">AI MDU</label>
                        <input type="text" class="form-control input-default" placeholder="Masukan AI MDU" name="ai_mdu" id="ai_mdu">
                    </div>

                    <div class="form-group">
                        <label for="no_pks">AI Jasa</label>
                        <input type="text" class="form-control input-default" placeholder="Masukan AI Jasa" name="ai_jasa" id="ai_jasa">
                    </div>


                    <div class="form-group">
                        <label for="no_pks">Pilih Tanggal:</label>
                        <input type="date" id="datepicker" class="form-control input-default"  name="tanggal_approve_pksup3">
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


<script>

src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">


    $(document).ready(function() {
        $('#datepicker-field').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
    });
</script>

@endsection