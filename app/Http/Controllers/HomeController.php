<?php

namespace App\Http\Controllers;
use app\Models\User;
use App\Models\Pks;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Bankmodel;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{

    public function cetak()
    {
        $pksRecord = Pks::where('id_pks', 26)->get();
        return view('cetak', compact('pksRecord'));
    }

    public function cetakpksbaview()
    {
        return view('cetakpksbaview');
    }

    public function cetakpksba(Request $request)
    {
        $no_agenda = $request->input('agenda');
        $pks = Pks::where('agenda', $no_agenda)->first();
        // return view('cetakpksba', ['pks' => $pks]);
        $bankData = null;

        // If $pks is found, fetch the corresponding bank data
        if ($pks) {
            $bankData = Bankmodel::where('id_pks', $pks->id_pks)->first();
        }
    
        return view('cetakpksba', ['pksRecord' => $pks, 'bankData' => $bankData]);
        // dd($pks);
        // return view('cetakpksba', compact('pksRecord'));
    }

    public function monitoruserview()
    {
        return view('monitorview');
    }

    public function monitoruser(Request $request)
    {
        $no_agenda = $request->input('agenda');
        $pks = Pks::where('agenda', $no_agenda)->first();
        // return view('cetakpksba', ['pks' => $pks]);
        $bankData = null;

        // If $pks is found, fetch the corresponding bank data
        if ($pks) {
            $bankData = Bankmodel::where('id_pks', $pks->id_pks)->first();
        }
    
        return view('monitoruser', ['pks' => $pks, 'bankData' => $bankData]);
        // dd($pks);
        // return view('cetakpksba', compact('pksRecord'));
    }

    public function searchresult(Request $request)
    {
        $id_pks = $request->query('id_pks');
        // Your logic to handle the search result
        $pks = Pks::find($id_pks); // Example query to get the PKS data
        return view('up3.dashboardadmin', ['pks' => $pks]);
    }

    public function searchresultbank(Request $request)
    {
        $id_pks = $request->query('id_pks');
        // Your logic to handle the search result
        $pks = Pks::find($id_pks); // Example query to get the PKS data
        return view('bank.dashboardadmin', ['pks' => $pks]);
    }


    public function up3filterpks(Request $request)
    {
        if (Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            if($usertype=='up3bjm')
            {
                $filter = $request->input('filter');
                if ($filter == 1) {
                    $pksData = pks::where('up3', 'up3_banjarmasin')
                    ->where('nomor_akun_bank','!=','0')
                    ->where('no_pks','=',NULL)
                    ->orderBy('tanggal_approve_bank', 'desc')->get();
                }
                else{
                    $pksData = pks::where('up3', 'up3_banjarmasin')
                    ->where('nomor_akun_bank','!=','0')->get();
                }

                return view('up3.bjm.dashboardadminpks',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3ktb')
            {
                $filter = $request->input('filter');
                if ($filter == 1) {
                $pksData = pks::where('up3', 'up3_kotabaru')
                ->where('nomor_akun_bank','!=','0')
                ->where('no_pks','=',NULL)
                ->orderBy('tanggal_approve_bank', 'desc')->get();
                }
                else{
                    $pksData = pks::where('up3', 'up3_kotabaru')
                    ->where('nomor_akun_bank','!=','0')->get();
                }
                return view('up3.ktb.dashboardadminpks',['pksData'=>$pksData]);
                
            }
            elseif($usertype=='up3kps')
            {
                $filter = $request->input('filter');
                if ($filter == 1) {
                $pksData = pks::where('up3', 'up3_kapuas')
                ->where('nomor_akun_bank','!=','0')
                ->orderBy('tanggal_approve_bank', 'desc')->get();
                }
                else{
                    $pksData = pks::where('up3', 'up3_kapuas')
                    ->where('nomor_akun_bank','!=','0')->get();
                }
                return view('up3.kps.dashboardadminpks',['pksData'=>$pksData]);
                
            }
            elseif($usertype=='up3plk')
            {
                $filter = $request->input('filter');
                if ($filter == 1) {
                $pksData = pks::where('up3', 'up3_palangka')
                ->where('nomor_akun_bank','!=','0')
                ->orderBy('tanggal_approve_bank', 'desc')->get();
                }
                else{
                    $pksData = pks::where('up3', 'up3_palangka')
                    ->where('nomor_akun_bank','!=','0')->get();
                }
                return view('up3.plk.dashboardadminpks',['pksData'=>$pksData]);
            
            }
            elseif($usertype=='up3pbun')
            {
                $filter = $request->input('filter');
                if ($filter == 1) {
                $pksData = pks::where('up3', 'up3_pangkalanbun')
                ->where('nomor_akun_bank','!=','0')
                ->orderBy('tanggal_approve_bank', 'desc')->get();
                }
                else{
                    $pksData = pks::where('up3', 'up3_pangkalanbun')
                    ->where('nomor_akun_bank','!=','0')->get();
                }
                return view('up3.pbun.dashboardadminpks',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3brb')
            {
                $filter = $request->input('filter');
                if ($filter == 1) {
                $pksData = pks::where('up3', 'up3_barabai')
                ->where('nomor_akun_bank','!=','0')
                ->orderBy('tanggal_approve_bank', 'desc')->get();
                }
                else{
                    $pksData = pks::where('up3', 'up3_barabai')
                    ->where('nomor_akun_bank','!=','0')->get();
                }
                return view('up3.brb.dashboardadminpks',['pksData'=>$pksData]);
            }

        }

    }

    public function up3pks(Request $request)
    {
        if (Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            if($usertype=='up3bjm')
            {
                $pksData = pks::where('up3', 'up3_banjarmasin')
                ->where('nomor_akun_bank','!=','0')
                ->orderBy('tanggal_approve_bank', 'desc')->get();
                return view('up3.bjm.dashboardadminpks',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3ktb')
            {
                $pksData = pks::where('up3', 'up3_kotabaru')
                ->where('nomor_akun_bank','!=','0')
                ->orderBy('tanggal_approve_bank', 'desc')->get();
                return view('up3.ktb.dashboardadminpks',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3kps')
            {
                $pksData = pks::where('up3', 'up3_kapuas')
                ->where('nomor_akun_bank','!=','0')
                ->orderBy('tanggal_approve_bank', 'desc')->get();
                return view('up3.kps.dashboardadminpks',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3plk')
            {
                $pksData = pks::where('up3', 'up3_palangka')
                ->where('nomor_akun_bank','!=','0')
                ->orderBy('tanggal_approve_bank', 'desc')->get();
                return view('up3.plk.dashboardadminpks',['pksData'=>$pksData]);
            
            }
            elseif($usertype=='up3pbun')
            {
                $pksData = pks::where('up3', 'up3_pangkalanbun')
                ->where('nomor_akun_bank','!=','0')
                ->orderBy('tanggal_approve_bank', 'desc')->get();
                return view('up3.pbun.dashboardadminpks',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3brb')
            {
                $pksData = pks::where('up3', 'up3_barabai')
                ->where('nomor_akun_bank','!=','0')
                ->orderBy('tanggal_approve_bank', 'desc')->get();
                return view('up3.brb.dashboardadminpks',['pksData'=>$pksData]);
            }

        }

    }

    public function up3filter(Request $request)
    {
        if (Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            if($usertype=='up3bjm')
            {
                $filter = $request->input('filter');
                $pksData = pks::where('up3', 'up3_banjarmasin');
                if ($filter == 1) {
                    $pksData = pks::where('status', 'baru')
                    ->where('up3','up3_banjarmasin');
                } elseif ($filter == 2) {
                   
                }
            
                $pksData = $pksData->orderBy('created_at', 'desc')->get();
                return view('up3.bjm.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3ktb')
            {
                $filter = $request->input('filter');
                $pksData = pks::where('up3', 'up3_kotabaru');
                if ($filter == 1) {
                    $pksData = pks::where('status', 'baru')
                    ->where('up3','up3_kotabaru');
                } 
                elseif ($filter == 2) {
                   
                }
            
                $pksData = $pksData->orderBy('created_at', 'desc')->get();
                return view('up3.ktb.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3kps')
            {
                $filter = $request->input('filter');
                $pksData = pks::where('up3', 'up3_kapuas');
                if ($filter == 1) {
                    $pksData = pks::where('status', 'baru')
                    ->where('up3','up3_kapuas');
                } elseif ($filter == 2) {
                   
                }
            
                $pksData = $pksData->orderBy('created_at', 'desc')->get();
                return view('up3.kps.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3plk')
            {
                $filter = $request->input('filter');
                $pksData = pks::where('up3', 'up3_palangka');
                if ($filter == 1) {
                    $pksData = pks::where('status', 'baru')
                    ->where('up3','up3_palangka');
                } elseif ($filter == 2) {
                   
                }
            
                $pksData = $pksData->orderBy('created_at', 'desc')->get();
                return view('up3.plk.dashboardadmin',['pksData'=>$pksData]);
            
            }
            elseif($usertype=='up3pbun')
            {
                $filter = $request->input('filter');
                $pksData = pks::where('up3', 'up3_pangkalanbun');
                if ($filter == 1) {
                    $pksData = pks::where('status', 'baru')
                    ->where('up3','up3_pangkalanbun');
                } elseif ($filter == 2) {
                   
                }
            
                $pksData = $pksData->orderBy('created_at', 'desc')->get();
                return view('up3.pbun.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3brb')
            {
                $filter = $request->input('filter');
                $pksData = pks::where('up3', 'up3_barabai');
                if ($filter == 1) {
                    $pksData = pks::where('status', 'baru')
                    ->where('up3','up3_barabai');
                } elseif ($filter == 2) {
                   
                }
            
                $pksData = $pksData->orderBy('created_at', 'desc')->get();
                return view('up3.brb.dashboardadmin',['pksData'=>$pksData]);
            }

        }

    }

    public function bankfilter(Request $request)
    {
        if (Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            if($usertype=='bsi')
            {
                $filter = $request->input('filter');
                $pksData = pks::where('status', 'disetujui');
            
                if ($filter == 1) {
                    $pksData = $pksData->where(function($query) {
                        $query->where('bank1', 'bsi')->where('bank1_status', 'open')->where('nomor_akun_bank','0')
                            ->orWhere('bank2', 'bsi')->where('bank2_status', 'open')->where('nomor_akun_bank','0')
                            ->orWhere('bank3', 'bsi')->where('bank3_status', 'open')->where('nomor_akun_bank','0');
                    });
                } elseif ($filter == 2) {
                    $pksData = $pksData->where(function($query) {
                        $query->where('bank1', 'bsi')->where('bank1_status', 'soon')->where('nomor_akun_bank','0')
                            ->orWhere('bank2', 'bsi')->where('bank2_status', 'soon')->where('nomor_akun_bank','0')
                            ->orWhere('bank3', 'bsi')->where('bank3_status', 'soon')->where('nomor_akun_bank','0');
                    });
                }
            
                $pksData = $pksData->orderBy('bank_timer', 'desc')->get();
                return view('bank.bsi.dashboardadmin',['pksData'=>$pksData]);
            
            }
            elseif($usertype=='bni')
            {
                $filter = $request->input('filter');
                $pksData = pks::where('status', 'disetujui');
            
                if ($filter == 1) {
                    $pksData = $pksData->where(function($query) {
                        $query->where('bank1', 'bni')->where('bank1_status', 'open')->where('nomor_akun_bank','0')
                            ->orWhere('bank2', 'bni')->where('bank2_status', 'open')->where('nomor_akun_bank','0')
                            ->orWhere('bank3', 'bni')->where('bank3_status', 'open')->where('nomor_akun_bank','0');
                    });
                } elseif ($filter == 2) {
                    $pksData = $pksData->where(function($query) {
                        $query->where('bank1', 'bni')->where('bank1_status', 'soon')->where('nomor_akun_bank','0')
                            ->orWhere('bank2', 'bni')->where('bank2_status', 'soon')->where('nomor_akun_bank','0')
                            ->orWhere('bank3', 'bni')->where('bank3_status', 'soon')->where('nomor_akun_bank','0');
                    });
                }
            
                $pksData = $pksData->orderBy('bank_timer', 'desc')->get();
                return view('bank.bni.dashboardadmin',['pksData'=>$pksData]);

            }
            elseif($usertype=='bri')
            {
                $filter = $request->input('filter');
                $pksData = pks::where('status', 'disetujui');
            
                if ($filter == 1) {
                    $pksData = $pksData->where(function($query) {
                        $query->where('bank1', 'bri')->where('bank1_status', 'open')->where('nomor_akun_bank','0')
                            ->orWhere('bank2', 'bri')->where('bank2_status', 'open')->where('nomor_akun_bank','0')
                            ->orWhere('bank3', 'bri')->where('bank3_status', 'open')->where('nomor_akun_bank','0');
                    });
                } elseif ($filter == 2) {
                    $pksData = $pksData->where(function($query) {
                        $query->where('bank1', 'bri')->where('bank1_status', 'soon')->where('nomor_akun_bank','0')
                            ->orWhere('bank2', 'bri')->where('bank2_status', 'soon')->where('nomor_akun_bank','0')
                            ->orWhere('bank3', 'bri')->where('bank3_status', 'soon')->where('nomor_akun_bank','0');
                    });
                }
            
                $pksData = $pksData->orderBy('bank_timer', 'desc')->get();
                return view('bank.bri.dashboardadmin',['pksData'=>$pksData]);
            
            }
            elseif($usertype=='kalsel')
            {
                $filter = $request->input('filter');
                $pksData = pks::where('status', 'disetujui');
            
                if ($filter == 1) {
                    $pksData = $pksData->where(function($query) {
                        $query->where('bank1', 'kalsel')->where('bank1_status', 'open')->where('nomor_akun_bank','0')
                            ->orWhere('bank2', 'kalsel')->where('bank2_status', 'open')->where('nomor_akun_bank','0')
                            ->orWhere('bank3', 'kalsel')->where('bank3_status', 'open')->where('nomor_akun_bank','0');
                    });
                } elseif ($filter == 2) {
                    $pksData = $pksData->where(function($query) {
                        $query->where('bank1', 'kalsel')->where('bank1_status', 'soon')->where('nomor_akun_bank','0')
                            ->orWhere('bank2', 'kalsel')->where('bank2_status', 'soon')->where('nomor_akun_bank','0')
                            ->orWhere('bank3', 'kalsel')->where('bank3_status', 'soon')->where('nomor_akun_bank','0');
                    });
                }
            
                $pksData = $pksData->orderBy('bank_timer', 'desc')->get();
                return view('bank.kalsel.dashboardadmin',['pksData'=>$pksData]);
            
            }
            elseif($usertype=='kalteng')
            {
                $filter = $request->input('filter');
                $pksData = pks::where('status', 'disetujui');
            
                if ($filter == 1) {
                    $pksData = $pksData->where(function($query) {
                        $query->where('bank1', 'kalteng')->where('bank1_status', 'open')->where('nomor_akun_bank','0')
                            ->orWhere('bank2', 'kalteng')->where('bank2_status', 'open')->where('nomor_akun_bank','0')
                            ->orWhere('bank3', 'kalteng')->where('bank3_status', 'open')->where('nomor_akun_bank','0');
                    });
                } elseif ($filter == 2) {
                    $pksData = $pksData->where(function($query) {
                        $query->where('bank1', 'kalteng')->where('bank1_status', 'soon')->where('nomor_akun_bank','0')
                            ->orWhere('bank2', 'kalteng')->where('bank2_status', 'soon')->where('nomor_akun_bank','0')
                            ->orWhere('bank3', 'kalteng')->where('bank3_status', 'soon')->where('nomor_akun_bank','0');
                    });
                }
            
                $pksData = $pksData->orderBy('bank_timer', 'desc')->get();
                return view('bank.kalteng.dashboardadmin',['pksData'=>$pksData]);
            
            }
            elseif($usertype=='mandiri')
            {
                $filter = $request->input('filter');
                $pksData = pks::where('status', 'disetujui');
            
                if ($filter == 1) {
                    $pksData = $pksData->where(function($query) {
                        $query->where('bank1', 'mandiri')->where('bank1_status', 'open')->where('nomor_akun_bank','0')
                            ->orWhere('bank2', 'mandiri')->where('bank2_status', 'open')->where('nomor_akun_bank','0')
                            ->orWhere('bank3', 'mandiri')->where('bank3_status', 'open')->where('nomor_akun_bank','0');
                    });
                } elseif ($filter == 2) {
                    $pksData = $pksData->where(function($query) {
                        $query->where('bank1', 'mandiri')->where('bank1_status', 'soon')->where('nomor_akun_bank','0')
                            ->orWhere('bank2', 'mandiri')->where('bank2_status', 'soon')->where('nomor_akun_bank','0')
                            ->orWhere('bank3', 'mandiri')->where('bank3_status', 'soon')->where('nomor_akun_bank','0');
                    });
                }
            
                $pksData = $pksData->orderBy('bank_timer', 'desc')->get();
                return view('bank.mandiri.dashboardadmin',['pksData'=>$pksData]);
            
            }

        }

    }

    public function dasboardverifikasi()
    {
    if (Auth::id())
        {
            $usertype=Auth()->user()->usertype;
        if($usertype=='bsi')
        {
            $pksData = pks::where('verifikasi_bank', 'diproses')
            ->where('bank_terpilih', 'bsi')
            ->get();
            return view('bank.bsi.dashboardverifikasi',['pksData'=>$pksData]);
        }

        if($usertype=='bni')
        {
            $pksData = pks::where('verifikasi_bank', 'diproses')
            ->where('bank_terpilih', 'bni')
            ->get();
            return view('bank.bni.dashboardverifikasi',['pksData'=>$pksData]);
        }

        if($usertype=='bri')
        {
            $pksData = pks::where('verifikasi_bank', 'diproses')
            ->where('bank_terpilih', 'bri')
            ->get();
            return view('bank.bri.dashboardverifikasi',['pksData'=>$pksData]);
        }

        if($usertype=='kalsel')
        {
            $pksData = pks::where('verifikasi_bank', 'diproses')
            ->where('bank_terpilih', 'kalsel')
            ->get();
            return view('bank.kalsel.dashboardverifikasi',['pksData'=>$pksData]);
        }

        if($usertype=='kalteng')
        {
            $pksData = pks::where('verifikasi_bank', 'diproses')
            ->where('bank_terpilih', 'kalteng')
            ->get();
            return view('bank.kalteng.dashboardverifikasi',['pksData'=>$pksData]);
        }

        if($usertype=='mandiri')
        {
            $pksData = pks::where('verifikasi_bank', 'diproses')
            ->where('bank_terpilih', 'mandiri')
            ->get();
            return view('bank.mandiri.dashboardverifikasi',['pksData'=>$pksData]);
        }
    }

    }
    // public function showpks($id_pks){
    //     $pks = Pks::where('id_pks', $id_pks)->firstOrFail();
    //     $bankData = null;

    //     // If $pks is found, fetch the corresponding bank data
    //     if ($pks) {
    //         $bankData = Bankmodel::where('id_pks', $pks->id_pks)->first();
    //     }
    //     return view('up3.detilpks',['pks'=>$pks, 'bankData' => $bankData, 'pksRecord' => $pks ]);
    // }

    public function index()
    {
        if (Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            if($usertype=='user')
            {
                $pksData = pks::all();
                return view ('dashboard');
            }
            elseif($usertype=='admin')
            {
                $users = User::where('usertype', '!=', 'admin')->get();
                return view('admin.dashboardadmin',['users'=>$users]);
            }
            // elseif($usertype=='bank')
            // {
            //     $pksData = pks::all();
            //     return view('bank.dashboarbank');
            // }
            elseif($usertype=='bni')
            {
                // $pksData = pks::where('up3', 'up3bjm')->get();
                // $pksData = pks::all();
                $pksData = pks::where('status', 'disetujui')
                ->where('bank1', 'bni')
                ->orwhere('bank2', 'bni')
                ->orwhere('bank3', 'bni')
                    // ->where('nomor_akun_bank', 0)
                    // ->where(function($query) {
                    //     $query->where(function($q) {
                    //         $q->where('bank1', 'bni')
                    //         ->where('bank_timer', '<', 24);
                    //     })
                    //     ->orWhere(function($q) {
                    //         $q->where('bank2', 'bni')
                    //         ->where('bank_timer', '>', 24)
                    //         ->where('bank_timer', '<', 48);
                    //     })
                    //     ->orWhere(function($q) {
                    //         $q->where('bank3', 'bni')
                    //         ->where('bank_timer', '>', 48)
                    //         ->where('bank_timer', '<', 72);
                    //     });
                    // })
                    ->get();

                return view('bank.bni.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='bri')
            {
                $pksData = pks::where('status', 'disetujui')
                ->where('bank1', 'bri')
                ->orwhere('bank2', 'bri')
                ->orwhere('bank3', 'bri')
                // ->where('nomor_akun_bank', 0)
                // ->where(function($query) {
                //     $query->where(function($q) {
                //         $q->where('bank1', 'bri')
                //         ->where('bank_timer', '<=', 24);
                //     })
                //     ->orWhere(function($q) {
                //         $q->where('bank2', 'bri')
                //         ->where('bank_timer', '>', 24)
                //         ->where('bank_timer', '<=', 48);
                //     })
                //     ->orWhere(function($q) {
                //         $q->where('bank3', 'bri')
                //         ->where('bank_timer', '>', 48)
                //         ->where('bank_timer', '<=', 72);
                //     });
                // })
                ->get();

                return view('bank.bri.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='bsi')
            {
                $pksData = pks::where('status', 'disetujui')
                ->where('bank1', 'bsi')->where('status', 'disetujui')
                ->orwhere('bank2', 'bsi')->where('status', 'disetujui')
                ->orwhere('bank3', 'bsi')->where('status', 'disetujui')
                // ->where('nomor_akun_bank', 0)
                // ->where(function($query) {
                //     $query->where(function($q) {
                //         $q->where('bank1', 'bsi')
                //         ->where('bank_timer', '<', 24);
                //     })
                //     ->orWhere(function($q) {
                //         $q->where('bank2', 'bsi')
                //         ->where('bank_timer', '>', 24)
                //         ->where('bank_timer', '<', 48);
                //     })
                //     ->orWhere(function($q) {
                //         $q->where('bank3', 'bsi')
                //         ->where('bank_timer', '>', 48)
                //         ->where('bank_timer', '<', 72);
                //     });
                // })
                ->get();
                // dd($pksData);
                return view('bank.bsi.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='kalsel')
            {
                $pksData = pks::where('status', 'disetujui')
                ->where('bank1', 'kalsel')->where('status', 'disetujui')
                ->orwhere('bank2', 'kalsel')->where('status', 'disetujui')
                ->orwhere('bank3', 'kalsel')->where('status', 'disetujui')
                // ->where('nomor_akun_bank', 0)
                // ->where(function($query) {
                //     $query->where(function($q) {
                //         $q->where('bank1', 'kalsel')
                //         ->where('bank_timer', '<', 24);
                //     })
                //     ->orWhere(function($q) {
                //         $q->where('bank2', 'kalsel')
                //         ->where('bank_timer', '>', 24)
                //         ->where('bank_timer', '<', 48);
                //     })
                //     ->orWhere(function($q) {
                //         $q->where('bank3', 'kalsel')
                //         ->where('bank_timer', '>', 48)
                //         ->where('bank_timer', '<', 72);
                //     });
                // })
                ->get();

                return view('bank.kalsel.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='kalteng')
            {
                $pksData = pks::where('status', 'disetujui')
                ->where('bank1', 'kalteng')->where('status', 'disetujui')
                ->orwhere('bank2', 'kalteng')->where('status', 'disetujui')
                ->orwhere('bank3', 'kalteng')->where('status', 'disetujui')
                // ->where('nomor_akun_bank', 0)
                // ->where(function($query) {
                //     $query->where(function($q) {
                //         $q->where('bank1', 'kalteng')
                //         ->where('bank_timer', '<', 24);
                //     })
                //     ->orWhere(function($q) {
                //         $q->where('bank2', 'kalteng')
                //         ->where('bank_timer', '>', 24)
                //         ->where('bank_timer', '<', 48);
                //     })
                //     ->orWhere(function($q) {
                //         $q->where('bank3', 'kalteng')
                //         ->where('bank_timer', '>', 48)
                //         ->where('bank_timer', '<', 72);
                //     });
                // })
                ->get();

                return view('bank.kalteng.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='mandiri')
            {
                $pksData = pks::where('status', 'disetujui')
                ->where('bank1', 'mandiri')->where('status', 'disetujui')
                ->orwhere('bank2', 'mandiri')->where('status', 'disetujui')
                ->orwhere('bank3', 'mandiri')->where('status', 'disetujui')
                // ->where('nomor_akun_bank', 0)
                // ->where(function($query) {
                //     $query->where(function($q) {
                //         $q->where('bank1', 'mandiri')
                //         ->where('bank_timer', '<', 24);
                //     })
                //     ->orWhere(function($q) {
                //         $q->where('bank2', 'mandiri')
                //         ->where('bank_timer', '>', 24)
                //         ->where('bank_timer', '<', 48);
                //     })
                //     ->orWhere(function($q) {
                //         $q->where('bank3', 'mandiri')
                //         ->where('bank_timer', '>', 48)
                //         ->where('bank_timer', '<', 72);
                //     });
                // })
                ->get();

                return view('bank.mandiri.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3bjm')
            {
                $pksData = pks::where('up3', 'up3_banjarmasin')->get();
                return view('up3.bjm.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3brb')
            {
                $pksData = pks::where('up3', 'up3_barabai')->get();
                return view('up3.brb.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3kps')
            {
                $pksData = pks::where('up3', 'up3_kapuas')->get();
                return view('up3.kps.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3ktb')
            {
                $pksData = pks::where('up3', 'up3_kotabaru')->get();
                return view('up3.ktb.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3pbun')
            {
                $pksData = pks::where('up3', 'up3_pangkalanbun')->get();
                return view('up3.pbun.dashboardadmin',['pksData'=>$pksData]);
            }
            elseif($usertype=='up3pky')
            {
                $pksData = pks::where('up3', 'up3_palangka')->get();
                return view('up3.pky.dashboardadmin',['pksData'=>$pksData]);
            }
            else
            {
                return redirect()->back();
            }
        }
    }

    public function post()
    {
        return view('admin.post');
    }

    
    public function updatepassup3()
    {
        return view('profile.updatepasswordup3');
    }


    public function updatepassadmin()
    {
        return view('profile.updatepasswordadmin');
    }

    public function updatepassbank()
    {
        return view('profile.updatepasswordbank');
    }

    public function updatepass(Request $request)
    {
        // $request->validate([
        //     'password' => 'required|string|confirmed',
        // ]);
        // dd($request);
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}
