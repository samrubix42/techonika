<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define permissions
        $permissions = [
            'manage posts',
            'manage pages',
            'manage users',
            'manage settings',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm, 'guard_name' => 'web']);
        }

        // Create admin role and assign all permissions
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $adminRole->syncPermissions(Permission::all());

        // Create default admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@techonika.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('123456789'),
            ]
        );

        // Assign role to admin user
        if (! $admin->hasRole('admin')) {
            $admin->assignRole($adminRole);
        }
    }
}
