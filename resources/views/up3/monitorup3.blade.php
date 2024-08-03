@extends('templatesup3')

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
    $tanggal_approveup3=$pks->tanggal_approve_up3;
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
</script>
@endsection