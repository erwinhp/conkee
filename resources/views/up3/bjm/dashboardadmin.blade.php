@extends('templatesup3')

@section('plugin')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
{{-- <script src="{{asset('/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/js/custom.min.js')}}"></script>
<script src="{{asset('/vendor/global/global.min.js')}}"></script> --}}

{{-- <script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script> --}}
{{-- <script src="vendor/global/global.min.js"></script> --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="{{asset('/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	{{-- <script src="vendor/chart-js/chart.bundle.min.js"></script> --}}
@endsection


@section('content')
{{-- <a class="btn rounded btn-outline-dark me-3 ms-auto" href="#">Pending</a> BUTTON DARK --}}
{{-- <a class="btn rounded btn-outline-success me-3 ms-auto" href="#">Candidate</a> BUTTON GREEN--}}
{{-- <a class="btn rounded btn-outline-warning me-3 ms-auto" href="#">On-Hold</a> BUTTON YELLOW--}}
    <div class="container-fluid">
        <div class="d-flex flex-wrap mb-4 align-items-center search-filter">
            <div class="me-auto mb-2 pe-2">
                <h6 class="text-black fs-16 font-w600 mb-1">{{count($pksData)}} Data PKS</h6>
                {{-- <span class="fs-14">Based your preferences</span> --}}
            </div>
            {{-- <div class="form-check custom-switch toggle-switch text-end me-4 mb-2">
                <input type="checkbox" class="form-check-input" id="customSwitch11">
                <label class="form-check-label" for="customSwitch11">Details</label>
            </div>
            <div class="form-check custom-switch toggle-switch text-end me-5 mb-2">
                <input type="checkbox" class="form-check-input" id="customSwitch12">
                <label class="form-check-label" for="customSwitch12">Salary</label>
            </div> --}}
            <div class="mb-0 me-3 mt-3 mt-sm-0 mb-2">
                <form id="filterForm" action="{{ route('home.filterup3') }}" method="GET">
                    <select class="form-control" aria-label="Default select example" name="filter" onchange="document.getElementById('filterForm').submit();">
                        <option selected>Filter</option>
                        <option value="1">Baru</option>
                        <option value="2">Semua</option>
                    </select>
                </form>
            </div>
            <div class="container mt-5">
                <label for="pks-select">Select PKS:</label>
                <form id="pks-form" action="{{ route('searchresult') }}" method="GET">
                    <select id="pks-select" class="form-control" name="id_pks" onchange="this.form.submit()">
                        <option value="" selected disabled>Select PKS</option>
                        @foreach($pksData as $pks)
                            <option value="{{ $pks->id_pks }}">{{ $pks->nama_langganan }} - {{$pks->agenda}}</option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table display mb-4 dataTablesCard table-responsive-xl card-table" id="example5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date Applied</th>
                                <th>Company</th>
                                <th>Type</th>
                                <th>KTP</th>
                                <th>Contact</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pksData as $pks)
                                <td>{{$pks->id_pks}}</td>
                                <td>{{$pks->created_at}}</td>
                                <td>
                                    <div class="media">
                                        <svg class="me-3" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7.27273C0 3.25611 3.25611 0 7.27273 0H42.7273C46.7439 0 50 3.25611 50 7.27273V42.7273C50 46.7439 46.7439 50 42.7273 50H7.27273C3.25611 50 0 46.7439 0 42.7273V7.27273Z" fill="#D3D3D3"/>
                                            <path d="M0 7.27273C0 3.25611 3.25611 0 7.27273 0H42.7273C46.7439 0 50 3.25611 50 7.27273V42.7273C50 46.7439 46.7439 50 42.7273 50H7.27273C3.25611 50 0 46.7439 0 42.7273V7.27273Z" fill="#515151"/>
                                            <path d="M12.889 12.8887C14.4642 11.3134 16.3344 10.0638 18.3926 9.21131C20.4508 8.35877 22.6567 7.91998 24.8845 7.91998C27.1123 7.91998 29.3183 8.35878 31.3765 9.21131C33.4347 10.0638 35.3048 11.3134 36.8801 12.8887C38.4554 14.464 39.7049 16.3341 40.5575 18.3923C41.41 20.4505 41.8488 22.6565 41.8488 24.8843C41.8488 27.1121 41.41 29.318 40.5575 31.3762C39.7049 33.4344 38.4554 35.3046 36.8801 36.8798L30.8823 30.882C31.6699 30.0944 32.2947 29.1593 32.721 28.1302C33.1473 27.1011 33.3667 25.9982 33.3667 24.8843C33.3667 23.7704 33.1473 22.6674 32.721 21.6383C32.2947 20.6092 31.6699 19.6741 30.8823 18.8865C30.0947 18.0988 29.1596 17.4741 28.1305 17.0478C27.1014 16.6215 25.9984 16.4021 24.8845 16.4021C23.7706 16.4021 22.6676 16.6215 21.6385 17.0478C20.6094 17.4741 19.6744 18.0988 18.8867 18.8865L12.889 12.8887Z" fill="white"/>
                                            <path d="M36.8801 12.8887C40.0615 16.0701 41.8488 20.385 41.8488 24.8842C41.8488 29.3835 40.0615 33.6984 36.8801 36.8798C33.6987 40.0612 29.3837 41.8485 24.8845 41.8485C20.3853 41.8485 16.0704 40.0612 12.889 36.8798L18.8867 30.882C20.4775 32.4727 22.6349 33.3664 24.8845 33.3664C27.1341 33.3664 29.2916 32.4727 30.8823 30.882C32.473 29.2913 33.3667 27.1339 33.3667 24.8842C33.3667 22.6346 32.473 20.4772 30.8823 18.8865L36.8801 12.8887Z" fill="white"/>
                                        </svg>
                                        <div class="media-body text-nowrap">
                                            <h6 class="text-black font-w600 fs-16 mb-0">{{$pks->nama_langganan}}.</h6>
                                            <span class="fs-14">{{$pks->nama_pemohon}}</span>
                                        </div>
                                    </div>
                                </td>
                                <?php
                                $jenis_permohonan= str_replace('_', ' ', $pks->jenis_permohonan);
                                $jenis_permohonan = ucwords($jenis_permohonan);
                                ?>
                                <td>{{$jenis_permohonan}}</td>
                                <td>{{$pks->no_ktp}}</td>
                                <td>{{$pks->no_hp}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                    @if($pks->status == 'baru')
                                    <a class="btn rounded btn-outline-warning me-3 ms-auto" href="#">{{ $pks->status }}</a>
                                    @elseif($pks->status == 'disetujui')
                                        <a class="btn rounded btn-outline-success me-3 ms-auto" href="#">{{ $pks->status }}</a>
                                    @else
                                        <a class="btn rounded btn-outline-dark me-3 ms-auto" href="#">{{ $pks->status }}</a>
                                    @endif
                                        <div class="dropdown float-end custom-dropdown mb-0  c-pointer">
                                            <div class="" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                               
                                                <a class="dropdown-item" href="{{ route('admin.showpks', ['id_pks' => $pks->id_pks]) }}">Details</a>
                                                <a class="dropdown-item" href="{{ route('monitoring.up3', ['id_pks' => $pks->id_pks]) }}">Monitoring</a>
                                                {{-- <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


	<!-- Datatable -->

    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<script>




        $(document).ready(function() {
            // alert('supbitch');
            $('#pks-select').select2({
                placeholder: "Select PKS",
                allowClear: true
            });
        });

</script>

@endsection