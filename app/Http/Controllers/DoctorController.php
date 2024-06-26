<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function dashboard()
    {
        $user = auth()->user();
        $name = $user->name; 
        return response()->json(['message' => 'Welcome to the doctor dashboard ' . $user->name. " with ". $user->doctor->qualification. " Qualification" ], 200);
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $doctor = $user->doctor;

        $doctor->update($request->all());

        return response()->json(['message' => 'Profile updated successfully']);
    }
    //
}