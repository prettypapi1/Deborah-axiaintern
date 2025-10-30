<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $superAdmin = Role::create(['name' => 'SuperAdmin']);
        $schoolAdmin = Role::create(['name' => 'SchoolAdmin']);
        $teacher = Role::create(['name' => 'Teacher']);
        $student = Role::create(['name' => 'Student']);
        $parent = Role::create(['name' => 'Parent']);
        $bursar = Role::create(['name' => 'Bursar']);

        // Create permissions (example permissions)
        $permissions = [
            'view dashboard',
            'manage users',
            'manage schools',
            'manage classes',
            'view grades',
            'manage payments',
            'view reports',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign permissions to roles
        $superAdmin->givePermissionTo(Permission::all());
        
        $schoolAdmin->givePermissionTo([
            'view dashboard',
            'manage users',
            'manage classes',
            'view reports',
        ]);

        $teacher->givePermissionTo([
            'view dashboard',
            'manage classes',
            'view grades',
        ]);

        $student->givePermissionTo([
            'view dashboard',
            'view grades',
        ]);

        $parent->givePermissionTo([
            'view dashboard',
            'view grades',
        ]);

        $bursar->givePermissionTo([
            'view dashboard',
            'manage payments',
            'view reports',
        ]);
    }
}