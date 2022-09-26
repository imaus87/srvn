<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
            'password' => '$2y$10$qB4T3r//NxeGKcUxfk1kcezCU/w2mmoOLxNzg.2CEEVTV7nNys20q',
            'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'remember_token' => Str::random(10),
            'start_nr' => 14,
        ]);

        DB::table('users')->insert([
            'first_name' => 'André',
            'last_name' => 'Kolmeijer',
            'full_name' => 'André Kolmeijer',
            'email' => 'andrekolmeijer@gmail.com',
            'password' => '$2y$10$sDzAGePl6yphWQF9CrdDF.UQUjYpoIgBOgYsAxg4DkOa7FOW8APgu',
            'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'remember_token' => Str::random(10),
            'start_nr' => 323,
        ]);

        DB::table('users')->insert([
            'first_name' => 'René',
            'last_name' => 'Hoogterp',
            'full_name' => 'René Hoogterp',
            'email' => 'renehoogterp@srvn.nl',
            'password' => '$2y$10$BZOQqA/tuKbkjQ0ehdU0/eO6.9GdaDS9Y0OzrrlNoDLlGPOMG1YVm', //password
            'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'remember_token' => Str::random(10),
            'start_nr' => 10,
        ]);

        User::factory()->count(100)->create();
    }
}
