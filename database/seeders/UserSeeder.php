<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Abdullah Alshameri',
            'email' => 'abdullah@gmail.com',
            'password' => Hash::make('12345678'),
            // 'phone_number' => '777777777',
        ]);
    }
}
