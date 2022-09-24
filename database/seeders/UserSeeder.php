<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Maurice',
            'last_name' => 'Willems',
            'full_name' => 'Maurice Willems',
            'email' => 'mauricewillems@gmail.com',
            'password' => '$2y$10$BZOQqA/tuKbkjQ0ehdU0/eO6.9GdaDS9Y0OzrrlNoDLlGPOMG1YVm', //password
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'first_name' => 'André',
            'last_name' => 'Kolmeijer',
            'full_name' => 'André Kolmeijer',
            'email' => 'andrekolmeijer@gmail.com',
            'password' => '$2y$10$BZOQqA/tuKbkjQ0ehdU0/eO6.9GdaDS9Y0OzrrlNoDLlGPOMG1YVm', //password
            'created_at' => Carbon::now(),
        ]);
    }
}
