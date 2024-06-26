<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Patient;
use App\Models\User;

class PatientsTableSeeder extends Seeder
{
    public function run()
    {
        // Create 5 patients with associated users
        User::factory()->count(2)->create(['role' => 'patient'])->each(function ($user) {
            Patient::factory()->create(['user_id' => $user->id]);
        });
    }
}