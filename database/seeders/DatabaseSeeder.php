<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(MuscleGroupSeeder::class);
        $this->call(MuscleSeeder::class);
        $this->call(ExerciseSeeder::class);
    }
}
