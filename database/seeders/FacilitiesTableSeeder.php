<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Facility;
use App\Models\User;

class FacilitiesTableSeeder extends Seeder
{
    public function run()
    {
        // Create 5 facilities with associated users
        User::factory()->count(2)->create(['role' => 'facility'])->each(function ($user) {
            Facility::factory()->create(['user_id' => $user->id]);
        });
    }
}