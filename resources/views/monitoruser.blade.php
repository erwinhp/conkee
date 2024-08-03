@extends('templates')

@section('content')

<?php
$alasan_tolak="";
$tanggal_permohonan=$pks->created_at->format('Y-m-d');
//=======================================================
if ($pks->status=="baru")
{
    $tanggal_approveup3="-";
    $status_permohonan="-";
}
elseif ($pks->status=="ditolak") {
    $alasan_tolak=" Dengan Alasan ".$pks->alasan_reject;
    $tanggal_approveup3="-";
    $status_permohonan=$pks->status;
}
else {
    $tanggal_approveup3=$pks->tanggal_approve_up3;
    $status_permohonan=$pks->status;
}
//========================================================

if ($pks->nomor_akun_bank==0) {
    $nomor_akun_bank="-";
    $tanggal_approve_bank="-";
    $bank_terpilih='';
}
else {
    $nomor_akun_bank=$pks->nomor_akun_bank;
    $tanggal_approve_bank=$pks->tanggal_approve_bank;
    $bank_terpilih="- Bank ".$pks->bank_terpilih;
}
//=========================================================
if($pks->no_pks==NULL)
{
    $nomor_pksup3="-";
    $tanggal_approve_pksup3="-";
}
else {
    $tanggal_approve_pksup3=$pks->tanggal_approve_pksup3;
    $nomor_pksup3=$pks->no_pks;
}


?>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .progress-container {
            width: 100%; /* Adjust width as needed */
            max-width: 800px; /* Set a maximum width */
        }
        .progress-bar {
            position: relative;
        }
        .progress-bar span {
            position: absolute;
            right: 50%;
            color: black;
            font-weight: bold;
        }
        .bullet-points {
            list-style-type: disc; /* Bullet points */
            padding-left: 0;
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            text-align: center;
        }
        .bullet-points li {
            flex: 1;
            display: flex;
            justify-content: center;
        }
    </style>
<div class="row d-flex justify-content-center">
    <div class="col-xl-10 col-xxl-10 col-lg-10">
        <div class="card">
            <div class="card-header border-0 pb-0">
                <h4 class="card-title">Nama Langganan : {{$pks->nama_langganan}} || Nomor Agenda : {{$pks->agenda}}</h4>
            </div>
            <div class="card-body p-0">
                <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll my-4 px-4  height370">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge dark">
                            </div>
                            <a class="timeline-panel text-muted" href="#">
                                <span>{{$tanggal_permohonan}}</span>
                                <h6 class="mb-0">Request Permohonan</h6>
                            </a>
                        </li>
                        <li>
                            <div class="timeline-badge dark">
                            </div>
                            <a class="timeline-panel text-muted" href="#">
                                <span>{{$tanggal_approveup3}}</span>
                                <h6 class="mb-0">Status Approve UP3 : {{$status_permohonan}} {{$alasan_tolak}} </h6>
                            </a>
                        </li>
                        <li>
                            <div class="timeline-badge dark">
                            </div>
                            <a class="timeline-panel text-muted" href="#">
                                <span>{{$tanggal_approve_bank}}</span>
                                <h6 class="mb-0">Nomor Akun Bank : {{$nomor_akun_bank}} {{$bank_terpilih}}</h6>
                            </a>
                        </li>
                        <li>
                            <div class="timeline-badge dark">
                            </div>
                            <a class="timeline-panel text-muted" href="#">
                                <span>{{$tanggal_approve_pksup3}}</span>
                                <h6 class="mb-0">Nomor PKS UP3 : {{$nomor_pksup3}}</h6>
                            </a>
                        </li>

                        <li>
                            <div class="timeline-badge dark">
                            </div>
                            <a class="timeline-panel text-muted" href="#">
                                <span>Konfirmasi Pembayaran</span>
                                <h6 class="mb-0">
                                    <?php
                                    if($pks->verifikasi_bank=='diproses')
                                    {
                                        ?>
                                        Status : Verifikasi Sedang Diproses
                                        <?php
                                    }
                                    elseif($pks->verifikasi_bank=='diterima'){
                                        ?>
                                        Status : Pembayaran Diterima
                                        <?php
                                    }
                                    else {
                                        if (isset($pks->biaya_permohonan)) {
                                            echo 'Pembayaran: Rp. ' . $pks->biaya_permohonan;
                                        } else {
                                            echo 'Pembayaran: -';
                                        }
                                        ?>
                                    <br>
                                     <form action="{{ route('request.verifikasi') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_pks" value="{{$pks->id_pks}}">
                                        <button type="submit" class="btn btn-primary" name="submit" id="submit" onclick="return confirmSubmit()">Konfirmasi Pembayaran</button>
                                     </form>
                                     <?php
                                    }
                                    ?>

                                </h6>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- 
<div class="container mt-5">
    <h2>Bootstrap Progress Bar Example</h2> --}}
    <div class="container mt-5">
        <h3>Progress bar</h3>
        <div class="progress-container mx-auto">
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                    <span>70%</span>
                </div>
            </div>
        </div>
        <ul class="bullet-points">
            <li>Terpasang = X</li>
            <li>Request = X</li>
            <li>
            Total = <?php 
                 if (isset($pks->jumlah_pelanggan)) {
                echo  $pks->jumlah_pelanggan;
                } else {
                echo '-';
                }
            ?></li>
        </ul>
    </div>
{{-- </div> --}}

@endsection

@section('plugin')
{{-- <script src="vendor/chart-js/chart.bundle.min.js"></script>
    <script src="js/plugins-init/chartjs-init.js"></script>

        <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script> --}}
    {{-- <script src="vendor/global/global.min.js"></script>
    <script src="{{asset('/vendor/chart-js/chart.bundle.min.js')}}"></script>
    <script src="{{asset('/js/plugins-init/chartjs-init.js')}}"></script>
    <script src="{{asset('/js/custom.min.js')}}"></script>
    <script src="{{asset('/js/deznav-init.js')}}"></script> --}}
@endsection

<script>
    function startProgress() {
        let progressBar = $('#progress-bar');
        let width = 0;

        let interval = setInterval(function() {
            if (width >= 100) {
                clearInterval(interval);
            } else {
                width++;
                progressBar.css('width', width + '%');
                progressBar.attr('aria-valuenow', width);
            }
        }, 100); // Adjust the interval time to control the speed of the progress
    }

    function confirmSubmit() {
        return confirm("Are you sure you want to submit?");
    }
</script>