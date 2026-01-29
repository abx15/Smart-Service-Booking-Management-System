<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolesAndAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles
        $roleCustomer = Role::firstOrCreate(['name' => 'customer']);
        $roleProvider = Role::firstOrCreate(['name' => 'provider']);
        $roleAdmin = Role::firstOrCreate(['name' => 'admin']);

        // create admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@servicehub.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'is_active' => true,
            ]
        );
        if (!$admin->hasRole('admin')) {
            $admin->assignRole($roleAdmin);
        }

        // create test provider
        $provider = User::firstOrCreate(
            ['email' => 'provider@servicehub.com'],
            [
                'name' => 'Provider User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'is_active' => true,
            ]
        );
        if (!$provider->hasRole('provider')) {
            $provider->assignRole($roleProvider);
        }

        // create test customer
        $customer = User::firstOrCreate(
            ['email' => 'customer@servicehub.com'],
            [
                'name' => 'Customer User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'is_active' => true,
            ]
        );
        if (!$customer->hasRole('customer')) {
            $customer->assignRole($roleCustomer);
        }
    }
}
