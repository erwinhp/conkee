<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pks;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Bankmodel;

class pks_controller extends Controller
{
    public function inputpksup3(){
        // $pks = Pks::where('id_pks', $id_pks)->firstOrFail();
        return view('up3.inputpksup3');
    }

    public function request_verifikasi(Request $request)
    {
    $pksRecord = Pks::where('id_pks', $request->input('id_pks'))->first();
    $pksRecord->verifikasi_bank = 'diproses';
    $pksRecord->save();
    // return response()->json(['message' => 'no_pks updated successfully']);

    return redirect()->back();
    }
    
    public function updatepksup3(Request $request)
    {
          // Validate the incoming request
          $request->validate([
            // 'id_pks' => 'required|integer',
            // 'no_pks' => 'required|string',
            // 'biaya_penyambungan' => 'required|integer',
            // 'jaminan_langganan' => 'required|integer',
            // 'token_perdana' => 'required|integer',
            // 'biaya_materai' => 'required|integer',
            // 'biaya_transaksi' => 'required|integer',
            // 'biaya_permohonan' => 'required|integer',
            // 'tanggal_approve_pksup3' => 'required|string',
        ]);
        // dd($request);
        // Find the PKS record by id_pks
        $pksRecord = Pks::where('id_pks', $request->input('id_pks'))->first();
            $pksRecord->no_pks = $request->input('no_pks');
            $pksRecord->biaya_penyambungan = $request->input('biaya_penyambungan');
            $pksRecord->jaminan_langganan = $request->input('jaminan_langganan');
            $pksRecord->token_perdana = $request->input('token_perdana');
            $pksRecord->biaya_materai = $request->input('biaya_materai');
            $pksRecord->biaya_transaksi = $request->input('biaya_transaksi');
            $pksRecord->biaya_permohonan = $request->input('biaya_permohonan');
            $pksRecord->tanggal_approve_pksup3=$request->input('tanggal_approve_pksup3');
            $pksRecord->total_daya = $request->input('total_daya');
            $pksRecord->ai_mdu = $request->input('ai_mdu');
            $pksRecord->ai_jasa=$request->input('ai_jasa');
            $pksRecord->save();
            // return response()->json(['message' => 'no_pks updated successfully']);
            return redirect()->route('home.up3pks');
    }
    
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'up3' => 'required|string|max:30',
            'agenda' => 'required|string',
            'nama_langganan' => 'required|string|max:40',
            'nama_pemohon' => 'required|string|max:40',
            'no_hp' => 'required|string|max:20',
            'no_ktp' => 'required|string|max:30',
            'no_npwp' => 'required|string|max:30',
            'alamat' => 'required|string|max:80',
            'detil' => 'required|string',
            'jenis_permohonan' => 'required|string|max:150',
            'bank1' => 'required|string|max:10',
            'bank2' => 'nullable|string|max:10',
            'bank3' => 'nullable|string|max:10',
            'jenis_rekening' => 'required|string|max:20',
            'nama_rekening' => 'required|string|max:20',
            // You may add validation rules for the picture uploads here
        ]);

        // Handle file uploads
            // Inside your function
            $imageFields = ['ttd','stempel','undangan_prob','eviden_prob','ktp', 'npwp', 'nib', 'akta_perusahaan', 'surat_kuasa'];
            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $uuid = Str::uuid();
                    $extension = $file->getClientOriginalExtension(); // Get the original extension of the file
                    $fileName = $uuid . '.' . $extension; // Generate a unique file name using UUID
                    $filePath = $file->storeAs("public/$field", $fileName); // Store the file in the appropriate directory
                    $filePathWithoutPublic = str_replace('public/', '', $filePath);
                    $validatedData[$field] = $filePathWithoutPublic; // Store the file path in the database
                }
            }

        // dd("anjing");
        // Create a new SubscriptionRequest instance and save it to the database
        Pks::create($validatedData);

        // Redirect the user or return a response as needed
        return redirect()->route('noagenda', ['agenda' => $validatedData['agenda']])->with('success', 'Subscription request submitted successfully.');
    }



    
    public function showpks($id_pks){
        $pks = Pks::where('id_pks', $id_pks)->firstOrFail();
        $bankData = null;

        // If $pks is found, fetch the corresponding bank data
        if ($pks) {
            $bankData = Bankmodel::where('id_pks', $pks->id_pks)->first();
        }
        return view('up3.detilpks',['pks'=>$pks, 'bankData' => $bankData, 'pksRecord' => $pks ]);
    }

    public function monitoringup3($id_pks){
        $pks = Pks::where('id_pks', $id_pks)->firstOrFail();
        $bankData = null;

        // If $pks is found, fetch the corresponding bank data
        if ($pks) {
            $bankData = Bankmodel::where('id_pks', $pks->id_pks)->first();
        }
        return view('up3.monitorup3',['pks'=>$pks, 'bankData' => $bankData, 'pksRecord' => $pks ]);
    }

    public function monitoringbank($id_pks){
        $pks = Pks::where('id_pks', $id_pks)->firstOrFail();
        $bankData = null;

        // If $pks is found, fetch the corresponding bank data
        if ($pks) {
            $bankData = Bankmodel::where('id_pks', $pks->id_pks)->first();
        }
        return view('bank.monitorbank',['pks'=>$pks, 'bankData' => $bankData, 'pksRecord' => $pks ]);
    }

    // public function showpkss(){
    //     return view('admin.detilpks',[]);
    // }

    public function index(){
         // Retrieve all data from the pks table
         $pksData = pks::all();
        //  $notApprovedData = pks::where('status', 'not_approved')->get();

         // Return the data to a view
         return view('admin.index', ['pksData' => $pksData]);
    }



    public function approve($id_pks)
    {
        // Find the pks record by id
        $pks = Pks::findOrFail($id_pks);

        // Update the status to 'approved'
        $pks->status = 'disetujui';
        $pks->tanggal_approve_up3=Carbon::now()->format('Y-m-d');
        $pks->bank1_status="open";
        $pks->bank2_status="soon";
        $pks->bank3_status="soon";

        // Save the changes
        $user = Auth::user();

        // Assign the user's ttd and stempel to $pks
        $pks->ttd_up3 = $user->ttd;
        $pks->stempel_up3 = $user->stempel;

        $pks->save();

        // Redirect back to the previous page or to a specific route
        return redirect()->back()->with('success', 'Status updated to approved.');
    }

    public function reject($id_pks, Request $request)
    {
        // Find the pks record by id
        $pks = Pks::findOrFail($id_pks);

        // Update the status to 'approved'
        $pks->status = 'ditolak';
        $pks->tanggal_approve_up3=Carbon::now()->format('Y-m-d');
        $pks->alasan_reject=$request->alasan_reject;

        $pks->save();

        // Redirect back to the previous page or to a specific route
        return redirect()->back()->with('success', 'Status updated to approved.');
    }


}
