<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'username' => 'test',
            'name' => 'Rare Pat',
            'email' => 'pgbalanza@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
