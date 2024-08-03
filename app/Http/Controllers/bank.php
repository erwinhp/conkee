<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Bankmodel;
use App\Models\Pks;
use Carbon\Carbon;


class bank extends Controller
{

    public function index()
    {
        return view('bank.updatedata');
    }
    
    public function inputaccountbank(Request $request)
    {
        $id_pks = $request->query('id_pks');
        $user = Auth::user();
        $pks = Pks::where('id_pks', $id_pks)->firstOrFail();
        // dd($pks[0]);
        return view('bank.inputaccountbank',['user'=>$user,'pks'=>$pks]);
    }

    public function storeaccountbank(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'ttd' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stempel' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_kantor_cabang' => 'nullable|string|max:255',
            'nama_kepala_cabang' => 'nullable|string|max:255',
            'alamat_bank' => 'nullable|string|max:255',
            'no_telp_bank' => 'nullable|string|max:20',
            'no_hp_kepala_cabang' => 'nullable|string|max:20',
            'email_bank' => 'nullable|email|max:255',
            'no_rekening' => 'required|string|max:255',
            'nama_rekening' => 'required|string|max:255',
            'no_pks_bank' => 'required|string|max:255',
            'keterangan' => 'nullable|string|max:255',
            'id_pks' => 'nullable|string|max:255',
            'bank_terpilih' => 'nullable|string|max:255',
        ]);
        if ($request->hasFile('ttd')) {
            $ttd = $request->file('ttd');
            $ttdName = Str::uuid() . '.' . $ttd->getClientOriginalExtension(); // Generate unique name
            $ttdPath = $ttd->storeAs('ttd', $ttdName, 'public');
            $ttdPathfix = str_replace('public/', '', $ttdPath); // Store path without 'public/'
        }
    
        // Handle the Stempel file upload
        if ($request->hasFile('stempel')) {
            $stempel = $request->file('stempel');
            $stempelName = Str::uuid() . '.' . $stempel->getClientOriginalExtension(); // Generate unique name
            $stempelPath = $stempel->storeAs('stempel', $stempelName, 'public');
            $stempelPathfix = str_replace('public/', '', $stempelPath); // Store path without 'public/'
        }
    

        // Create a new bank record with the request data
        $bank = new Bankmodel([
            'no_rekening' => $request->input('no_rekening'),
            'id_pks' => $request->input('id_pks'),
            'nama_rekening' => $request->input('nama_rekening'),
            'no_pks_bank' => $request->input('no_pks_bank'),
            'keterangan' => $request->input('keterangan'),
            
            'nama_kantor_cabang' => $request->input('nama_kantor_cabang'),
            'nama_kepala_cabang' => $request->input('nama_kepala_cabang'),
            'alamat_bank' => $request->input('alamat_bank'),
            'no_telp_bank' => $ttdPathfix,

            'no_hp_kepala_cabang' => $request->input('no_hp_kepala_cabang'),
            'email_bank' => $request->input('email_bank'),
            'no_pks_bank' => $request->input('no_pks_bank'),
            'ttd' => $ttdPathfix,
            'stempel' => $stempelPathfix,
        ]);
        // Save the bank record
        $bank->save();

        $pks = Pks::where('id_pks', $request->input('id_pks'))->firstOrFail();
        $pks->nomor_akun_bank = $request->input('no_rekening');
        $pks->bank_terpilih = $request->input('bank_terpilih');
        $pks->tanggal_approve_bank = $pks->tanggal_approve_up3=Carbon::now()->format('Y-m-d');
        $pks->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Bank details stored successfully.');
    }



    
//=========================================================================================================
    public function updatedatabank(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'ttd' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stempel' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_kantor_cabang' => 'nullable|string|max:255',
            'nama_kepala_cabang' => 'nullable|string|max:255',
            'alamat_bank' => 'nullable|string|max:255',
            'no_telp_bank' => 'nullable|string|max:20',
            'no_hp_kepala_cabang' => 'nullable|string|max:20',
            'email_bank' => 'nullable|email|max:255',
        ]);
    
        // Get the currently authenticated user
        $user = Auth::user();
    
        // Handle the TTD file upload
        if ($request->hasFile('ttd')) {
            $ttd = $request->file('ttd');
            $ttdName = Str::uuid() . '.' . $ttd->getClientOriginalExtension(); // Generate unique name
            $ttdPath = $ttd->storeAs('ttd', $ttdName, 'public');
            $user->ttd = str_replace('public/', '', $ttdPath); // Store path without 'public/'
        }
    
        // Handle the Stempel file upload
        if ($request->hasFile('stempel')) {
            $stempel = $request->file('stempel');
            $stempelName = Str::uuid() . '.' . $stempel->getClientOriginalExtension(); // Generate unique name
            $stempelPath = $stempel->storeAs('stempel', $stempelName, 'public');
            $user->stempel = str_replace('public/', '', $stempelPath); // Store path without 'public/'
        }
    
        // Update the user's additional data
        $user->nama_kantor_cabang = $request->input('nama_kantor_cabang');
        $user->nama_kepala_cabang = $request->input('nama_kepala_cabang');
        $user->alamat_bank = $request->input('alamat_bank');
        $user->no_telp_bank = $request->input('no_telp_bank');
        $user->no_hp_kepala_cabang = $request->input('no_hp_kepala_cabang');
        $user->email_bank = $request->input('email_bank');
    
        // Save the changes to the user
        $user->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Files uploaded and data updated successfully.');
    }
    
    public function counterbank()
    {
        // Fetch all PKS records with nomor_akun_bank = "0"
        $pksRecords = Pks::where('nomor_akun_bank', '0')->get();

        foreach ($pksRecords as $pksRecord) {
            // Increment bank_timer for each record
            $pksRecord->bank_timer = $pksRecord->bank_timer + 1;
        
            // Update bank statuses based on bank_timer value
            if ($pksRecord->bank_timer < 24) {
                $pksRecord->bank1_status = 'open';
                $pksRecord->bank2_status = 'soon';
                $pksRecord->bank3_status = 'soon';
            } elseif ($pksRecord->bank_timer >= 24 && $pksRecord->bank_timer < 48) {
                $pksRecord->bank1_status = 'expired';
                $pksRecord->bank2_status = 'open';
                $pksRecord->bank3_status = 'soon';
            } elseif ($pksRecord->bank_timer >= 48 && $pksRecord->bank_timer < 72) {
                $pksRecord->bank1_status = 'expired';
                $pksRecord->bank2_status = 'expired';
                $pksRecord->bank3_status = 'open';
            } else {
                $pksRecord->bank1_status = 'expired';
                $pksRecord->bank2_status = 'expired';
                $pksRecord->bank3_status = 'expired';
            }
        
            // Save the changes to the record
            $pksRecord->save();
        }

        // You can add return or redirect statements here if needed
        return response()->json([
            'success' => true,
            'message' => 'Bank timers updated successfully!',
            'bank_timers' => $pksRecords->pluck('bank_timer')
        ]);
    }


}
