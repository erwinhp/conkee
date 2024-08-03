@extends('templates')


@section('content')
    <title>PKS Approval</title>
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{$pks->nama_langganan}} </a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{$pks->nama_pemohon}}</a></li>
            </ol>
        </div>

        <form action="{{ url('pks/approve/' . $pks->id_pks) }}" method="POST" class="d-flex justify-content-end">
            @csrf
            <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Approve PKS berikut?');">Approve</button>
        </form>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail User</h4>
                    </div>
                    <div class="card-body pb-1">

                        <div class="card">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">No KTP</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$pks->no_ktp}}
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">No HP</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$pks->no_hp}}
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">NPWP</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$pks->no_npwp}}
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Alamat</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$pks->alamat}}
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Detail</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$pks->detil}}
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Jenis Permohonan</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        <?php
                                        $jenis_permohonan= str_replace('_', ' ', $pks->jenis_permohonan);
                                       echo($jenis_permohonan = ucwords($jenis_permohonan));
                                        ?>
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Bank</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Bank1: {{$pks->bank1}}
                                        <br>
                                        Bank1: {{$pks->bank2}}
                                        <br>
                                        Bank1: {{$pks->bank3}}
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Jenis Rekening</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$pks->jenis_rekening}}
                                    </p>
                                </div>
                            </div>

                            
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Jenis Rekening</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$pks->nama_rekening}}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dokumen Pendukung</h4>
                    </div>
                    <div class="card-body pb-1">
                        <div id="lightgallery" class="row">
                            {{-- {{$pks->nib}} --}}
                            <a href="{{ asset('storage/'.$pks->undangan_prob) }}" data-exthumbimage="{{ asset('storage/'.$pks->undangan_prob) }}" data-src="{{ asset('storage/'.$pks->undangan_prob) }}" class="col-lg-3 col-md-6 mb-4">
                            <img src="{{ asset('storage/'.$pks->undangan_prob) }}" class="rounded" alt="" style="width:100%;">
                                
                            <a href="{{ asset('storage/'.$pks->eviden_prob) }}" data-exthumbimage="{{ asset('storage/'.$pks->eviden_prob) }}" data-src="{{ asset('storage/'.$pks->eviden_prob) }}" class="col-lg-3 col-md-6 mb-4">
                            <img src="{{ asset('storage/'.$pks->eviden_probrd) }}" class="rounded" alt="" style="width:100%;">

                            <a href="{{ asset('storage/'.$pks->ktp) }}" data-exthumbimage="{{ asset('storage/'.$pks->ktp) }}" data-src="{{ asset('storage/'.$pks->ktp) }}" class="col-lg-3 col-md-6 mb-4">
                                <img src="{{ asset('storage/'.$pks->ktp) }}" class="rounded" alt="" style="width:100%;">
                            </a>
                            <a href="{{ asset('storage/'.$pks->npwp) }}" data-exthumbimage="{{ asset('storage/'.$pks->npwp) }}" data-src="{{ asset('storage/'.$pks->npwp) }}" class="col-lg-3 col-md-6 mb-4">
                                <img src="{{ asset('storage/'.$pks->npwp) }}" class="rounded" alt="" style="width:100%;">
                            </a>
                            <a href="{{ asset('storage/'.$pks->nib) }}" data-exthumbimage="{{ asset('storage/'.$pks->nib) }}" data-src="{{ asset('storage/'.$pks->nib) }}" class="col-lg-3 col-md-6 mb-4">
                                <img src="{{ asset('storage/'.$pks->nib) }}" class="rounded" alt="" style="width:100%;">
                            </a>
                            <a href="{{ asset('storage/'.$pks->akta_perusahaan) }}" data-exthumbimage="{{ asset('storage/'.$pks->akta_perusahaan) }}" data-src="{{ asset('storage/'.$pks->akta_perusahaan) }}" class="col-lg-3 col-md-6 mb-4">
                                <img src="{{ asset('storage/'.$pks->akta_perusahaan) }}" class="rounded" alt="" style="width:100%;">
                            </a>
                            <a href="{{ asset('storage/'.$pks->surat_kuasa) }}" data-exthumbimage="{{ asset('storage/'.$pks->surat_kuasa) }}" data-src="{{ asset('storage/'.$pks->surat_kuasa) }}" class="col-lg-3 col-md-6 mb-4">
                                <img src="{{ asset('storage/'.$pks->surat_kuasa) }}" class="rounded" alt="" style="width:100%;">
                            </a>

                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
        </div>





        
    </div>


@endsection