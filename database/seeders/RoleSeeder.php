<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Admin',
                'description' => 'System Administrator',
            ],
            [
                'name' => 'Student',
                'description' => 'Student User',
            ],
            [
                'name' => 'Officer',
                'description' => 'Student Officer',
            ],
            [
                'name' => 'Adviser',
                'description' => 'Organization Adviser',
            ],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(
                ['name' => $role['name']],
                ['description' => $role['description']]
            );
        }
    }
}
