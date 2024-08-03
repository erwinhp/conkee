@extends('templatesbank')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Data Bank </h4>
                </div>

                <div class="card-body">
                    <div class="basic-form">
                <!-- resources/views/upload.blade.php -->
                <form action="{{ route('update.data.bank') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="ttd">Nama Kantor Cabang</label>
                        <input type="text" class="form-control input-default" placeholder="Nama Kantor Cabang" name="nama_kantor_cabang" id="nama_kantor_cabang">
                    </div>

                    <div class="form-group">
                        <label for="ttd">Nama Kepala Cabang</label>
                        <input type="text" class="form-control input-default" placeholder="Nama Kepala Cabang" name="nama_kepala_cabang" id="nama_kepala_cabang">
                    </div>

                    <div class="form-group">
                        <label for="ttd">Alamat Bank</label>
                        <input type="text" class="form-control input-default" placeholder="Alamat Bank" name="alamat_bank" id="alamat_bank">
                    </div>

                    <div class="form-group">
                        <label for="ttd">No Telp Bank</label>
                        <input type="text" class="form-control input-default" placeholder="No Telp Bank" name="no_telp_bank" id="no_telp_bank">
                    </div>

                    <div class="form-group">
                        <label for="ttd">No HP Kepala Cabang</label>
                        <input type="text" class="form-control input-default" placeholder="No HP Kepala Cabang" name="no_hp_kepala_cabang" id="no_hp_kepala_cabang">
                    </div>

                    <div class="form-group">
                        <label for="ttd">email bank</label>
                        <input type="text" class="form-control input-default" placeholder="Email Bank" name="email_bank" id="email_bank">
                    </div>

                    <button type="submit" class="btn btn-primary">Upload</button>
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