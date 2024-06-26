<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'role' => 'admin',
            // Additional attributes for admin if needed
        ]);

        // Create 5 patient users
        User::factory()->create([
            'role' => 'patient',
            // Additional attributes for patient if needed
        ]);

        // Create 5 doctor users
        User::factory()->create([
            'role' => 'doctor',
            // Additional attributes for doctor if needed
        ]);

        // Create 5 facility users
        User::factory()->create([
            'role' => 'facility',
            // Additional attributes for facility if needed
        ]);
    }
}