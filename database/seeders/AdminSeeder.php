<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::firstOrCreate(
            ['email' => 'admin@example.com'], // الشرط على البريد
            [
                'name'        => 'Super Admin',
                'username'    => 'admin',
                'phone_number' => '1234567890',
                'super_admin' => true,
                'password'    => Hash::make('password123'),
            ]
        );
    }
}
