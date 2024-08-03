<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Bankmodel;
use App\Models\Pks;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class controller_admin extends Controller
{
    // public function userindex()
    // {
    //     //view dashboard all user 
    // }

    public function userupdateview(Request $request)
    {
        
        $id = $request->query('id');
        $user = User::where('id', $id)->firstOrFail();
        return view('admin.updatepasswordadmin',['user'=>$user]);
    }


    public function updatepassadmin(Request $request)
    {
        // dd($request);
        if($request->usertype=="")
        {
        $user = User::find($request->input('id'));
        $user->password = Hash::make($request->password);
        $user->save();
        }
        elseif($request->password=="")
        {
            $user = User::find($request->input('id'));
            $user->usertype = $request->input('usertype');
            $user->save();
        }
        else{
        $user = User::find($request->input('id'));
        $user->password = Hash::make($request->password);
        $user->usertype = $request->input('usertype');
        $user->save();
        }
        return redirect()->back()->with('success', 'Password updated successfully.');
    }

//========================================================gk ush klo gk perlu lol==============================
    public function adminpermohonanup3()
    {
        //view and search all permohonan up3 i guess
    }

    public function adminpksup3()
    {
        //view and search all pks up3
    }

    public function adminbank()
    {
        //view all bank data i guess
    }
}
