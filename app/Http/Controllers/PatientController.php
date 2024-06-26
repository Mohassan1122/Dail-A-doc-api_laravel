<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function dashboard()
    {
        return response()->json(['message' => 'Welcome to the patient dashboard']);
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $patient = $user->patient;

        $patient->update($request->all());

        return response()->json(['message' => 'Profile updated successfully']);
    }
}