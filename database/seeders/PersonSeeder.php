<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::factory()
            ->count(4) // 4 person
            ->hasTasks(3) // each of them will have 3 tasks
            ->create()
        
        Person::factory()
            ->count(2) // 4 person without tasks
            ->create()
    }
}
