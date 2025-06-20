<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
        'name'=>'admin',
        'email'=>'admin@gmail.com',
        'role'=>'admin',
        'password'=> bcrypt('admin'),
        ]);

        User::create([
        'name'=>'user',
        'email'=>'user@gmail.com',
        'role'=>'user',
        'password'=> bcrypt('user'),
        ]);
    }
}
