<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $providerRole = Role::where('name', 'provider')->first();
        $customerRole = Role::where('name', 'customer')->first();

        // Admin
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role_id' => $adminRole->id,
                'email_verified_at' => now(),
                'is_active' => true,
            ]
        );

        // Provider
        User::firstOrCreate(
            ['email' => 'provider@example.com'],
            [
                'name' => 'John Provider',
                'password' => Hash::make('password'),
                'role_id' => $providerRole->id,
                'email_verified_at' => now(),
                'phone' => '1234567890',
                'is_active' => true,
            ]
        );

        // Customer
        User::firstOrCreate(
            ['email' => 'customer@example.com'],
            [
                'name' => 'Jane Customer',
                'password' => Hash::make('password'),
                'role_id' => $customerRole->id,
                'email_verified_at' => now(),
                'is_active' => true,
            ]
        );
    }
}
