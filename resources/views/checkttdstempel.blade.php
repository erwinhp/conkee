@extends('templates')


@section('content')
    <title>PKS Approval</title>




        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dokumen Pendukung</h4>
                    </div>
                    <div class="card-body pb-1">
                        <div id="lightgallery" class="row">
                            {{-- {{$pks->nib}} --}}
                            <a href="{{ asset($ttdPath) }}" data-exthumbimage="{{ asset($ttdPath) }}" data-src="{{ asset($ttdPath) }}" class="col-lg-3 col-md-6 mb-4">
                            <img src="{{ asset($ttdPath) }}" class="rounded" alt="" style="width:100%;">
                                
                            <a href="{{ asset($stempelPath) }}" data-exthumbimage="{{ asset($stempelPath) }}" data-src="{{ asset($stempelPath) }}" class="col-lg-3 col-md-6 mb-4">
                            <img src="{{ asset($stempelPath) }}" class="rounded" alt="" style="width:100%;">

                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
        </div>





        
    </div>


@endsection