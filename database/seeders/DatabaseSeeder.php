<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        
        User::create([
            'name'	=> 'Admin',
            'email'	=> 'admin@gmail.com',
            'password'	=> bcrypt('passwordadmin')
        ]);

        User::create([
            'name'	=> 'User',
            'email'	=> 'user@gmail.com',
            'password'	=> bcrypt('passworduser')
        ]);
    }
}