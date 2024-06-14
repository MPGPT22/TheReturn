<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory()->create([
             'name' => "MPGPT",
              'email' => 'abc@abc.com',
              'password' => bcrypt('password'),
              'isAdmin' => true,
              'adminRole' => 'GameMaster',
         ]);
         \App\Models\User::factory()->create([
             'name' => "Omega",
              'email' => 'xyz@xyz.com',
              'password' => bcrypt('password'),
              'isAdmin' => false,
         ]);
         
        DB::table('users')->insert([
          'name' => "Omega",
          'email' => 'xyz@xyz.com',
          'password' => bcrypt('password'),
          'isAdmin' => false,
            ]
        );
    }
}
