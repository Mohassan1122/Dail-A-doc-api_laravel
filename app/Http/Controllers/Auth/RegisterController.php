<?php
namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:admin,patient,doctor,facility',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,  // Directly setting the role
        ]);

        switch ($request->role) {
            case 'admin':
                Admin::create(['user_id' => $user->id, 'bio' => 'Admin bio...']);
                break;
            case 'patient':
                Patient::create(['user_id' => $user->id, 'blood_type' => 'Patient blood type...']);
                break;
            case 'doctor':
                Doctor::create(['user_id' => $user->id, 'specialization' => 'Doctor specialization...']);
                break;
            case 'facility':
                Facility::create(['user_id' => $user->id, 'type' => 'Facility type...']);
                break;
        }

        return response()->json(['message' => 'User registered successfully']);
    }
}