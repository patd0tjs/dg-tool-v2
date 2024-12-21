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

    private $gradeLevels = [
        'Nursery', 'Kinder 1', 'Kinder 2', 'Grade 1', 'Grade 2', 'Grade 3', 
        'Grade 4', 'Grade 5', 'Grade 6', 'Grade 7', 'Grade 8', 'Grade 9', 
        'Grade 10', 'Grade 11', 'Grade 12'
    ];

    public function run()
    {
        \App\Models\User::factory()->create([
            'username' => 'test',
            'name' => 'Rare Pat',
            'email' => 'pgbalanza@gmail.com',
            'password' => Hash::make('password'),
            'is_super' => 1
        ]);

        foreach ($this->gradeLevels as $level) {
            \App\Models\GradeLevels::factory()->create([
                'name' => $level,
            ]);
        }
    }
}
