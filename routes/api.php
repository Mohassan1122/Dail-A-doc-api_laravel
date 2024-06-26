<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FacilityController;
// Route::get('/test', function () {
//     return response()->json(['message' => 'API is working']);
// });

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');

// Authenticated routes for admin
Route::middleware('auth:sanctum')->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard']);
    Route::put('profile', [AdminController::class, 'updateProfile']);
});

// Authenticated routes for patient
Route::middleware('auth:sanctum')->prefix('patient')->group(function () {
    Route::get('dashboard', [PatientController::class, 'dashboard']);
    Route::put('profile', [PatientController::class, 'updateProfile']);
});

// Authenticated routes for doctor
Route::middleware('auth:sanctum')->prefix('doctor')->group(function () {
    Route::get('dashboard', [DoctorController::class, 'dashboard']);
    Route::put('profile', [DoctorController::class, 'updateProfile']);
});

// Authenticated routes for facility
Route::middleware('auth:sanctum')->prefix('facility')->group(function () {
    Route::get('dashboard', [FacilityController::class, 'dashboard']);
    Route::put('profile', [FacilityController::class, 'updateProfile']);
});