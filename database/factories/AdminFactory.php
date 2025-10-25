<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition()
    {
        return [
            'name'        => 'Super Admin',
            'email'       => 'admin@example.com',
            'username'    => 'admin',
            'phone_number' => '1234567890',
            'super_admin' => true,
            'password'    => Hash::make('password123'),
        ];
    }
}
