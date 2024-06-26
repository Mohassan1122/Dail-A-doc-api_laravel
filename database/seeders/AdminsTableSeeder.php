<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Admin;
use App\Models\User;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        // Create 5 admins with associated users
        User::factory()->count(2)->create(['role' => 'admin'])->each(function ($user) {
            Admin::factory()->create(['user_id' => $user->id]);

        });
    }
}