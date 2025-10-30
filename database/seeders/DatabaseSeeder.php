<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // First, create the roles and permissions
        $this->call([
            RoleSeeder::class,
        ]);

        // Then create your test user
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Assign a role to the test user (e.g., SuperAdmin)
        $user->assignRole('SuperAdmin');

        // You can create more test users with different roles
        $schoolAdmin = User::factory()->create([
            'name' => 'School Admin',
            'email' => 'schooladmin@example.com',
        ]);
        $schoolAdmin->assignRole('SchoolAdmin');

        $teacher = User::factory()->create([
            'name' => 'Teacher User',
            'email' => 'teacher@example.com',
        ]);
        $teacher->assignRole('Teacher');

        // Uncomment if you want to create multiple users
        // User::factory(10)->create();
    }
}