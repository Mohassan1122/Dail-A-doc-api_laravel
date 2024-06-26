<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function dashboard()
    {
        return response()->json(['message' => 'Welcome to the admin dashboard']);
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $admin = $user->admin;

        $admin->update($request->all());

        return response()->json(['message' => 'Profile updated successfully']);
    }
}