<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Roles
        $superadmin = app('db')
            ->table('roles')
            ->insertGetId([
                'id' => 1,
                'name' => 'Superadmin',
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        $admin = app('db')
            ->table('roles')
            ->insertGetId([
                'id' => 2,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        $crew = app('db')
            ->table('roles')
            ->insertGetId([
                'id' => 3,
                'name' => 'Crew',
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        $teammanager = app('db')
            ->table('roles')
            ->insertGetId([
                'id' => 4,
                'name' => 'Teammanager',
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        $driver = app('db')
            ->table('roles')
            ->insertGetId([
                'id' => 5,
                'name' => 'Driver',
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        // Permissions
        $editRoles = app('db')
            ->table('permissions')
            ->insertGetId([
                'name' => 'Rollen Wijzigen',
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        app('db')
            ->table('role_has_permissions')
            ->insert([
                'role_id' => $superadmin,
                'permission_id' => $editRoles,
            ]);

        // Granting Roles
        app('db')
            ->table('model_has_roles')->insert([
                'role_id' => 1,
                'model_id' => 1,
                'model_type' => 'App\Models\User'
            ]);

        app('db')
            ->table('model_has_roles')->insert([
                'role_id' => 1,
                'model_id' => 2,
                'model_type' => 'App\Models\User'
            ]);
    }
}
