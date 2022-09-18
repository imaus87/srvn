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
            'name' => 'Maurice Willems',
            'email' => 'mauricewillems@gmail.com',
            'password' => 'password',
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Andre Kolmeijer',
            'email' => 'andrekolmeijer@gmail.com',
            'password' => 'password',
            'created_at' => Carbon::now(),
        ]);
    }
}
