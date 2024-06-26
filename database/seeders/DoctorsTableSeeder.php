<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Doctor;
use App\Models\User;

class DoctorsTableSeeder extends Seeder
{
    public function run()
    {
        // Create 5 doctors with associated users
        User::factory()->count(2)->create(['role' => 'doctor'])->each(function ($user) {
            Doctor::factory()->create(['user_id' => $user->id]);
        });


    }
}