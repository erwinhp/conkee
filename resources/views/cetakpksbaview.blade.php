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
                </div>
                      <br>
                      <br>
                    </form>
                    {{-- <div class="basic-form">
                        <button id="generate-pdf" class="btn btn-primary">Generate PDF</button>
                        <button id="generate-pdfrek" class="btn btn-primary">Generate PDF Rekening</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
