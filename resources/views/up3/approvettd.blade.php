@extends('templatesup3')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Upload TTD dan Stempel UP3 </h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
<!-- resources/views/upload.blade.php -->
<form action="{{ route('upload.ttd.stempel') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="ttd">Upload TTD</label>
        <input type="file" name="ttd" id="ttd" class="form-control">
    </div>
    <div class="form-group">
        <label for="stempel">Upload Stempel</label>
        <input type="file" name="stempel" id="stempel" class="form-control">
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