<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@idn.sch.id'],
            [
                'name' => 'Super Admin IDN',
                'password' => Hash::make('password123'),
                'role' => 'super_admin',
            ]
        );
    }
}
