<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
