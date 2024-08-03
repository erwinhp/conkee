<?php


// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;//uuid a must


class up3 extends Controller
{

    public function checkttd()
    {
        $user = Auth::user();
        $ttdPath = $user->ttd ? asset('storage/' . $user->ttd) : null;
        $stempelPath = $user->stempel ? asset('storage/' . $user->stempel) : null;
        return view('checkttdstempel', compact('user', 'ttdPath', 'stempelPath'));
    }


    public function index()
    {
        return view('up3.approvettd');
    }


    public function uploadTTDAndStempel(Request $request)
    {
     // Validate the incoming request
     $request->validate([
        'ttd' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'stempel' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

    // Save the changes to the user
    $user->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Files uploaded successfully.');
    }
}
