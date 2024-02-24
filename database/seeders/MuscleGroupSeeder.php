<?php

namespace Database\Seeders;

use App\Models\MuscleGroup;
use Illuminate\Database\Seeder;

class MuscleGroupSeeder extends Seeder
{
    public function run()
    {
        $diamond_shaped = new MuscleGroup();
        $diamond_shaped->name = 'Diamond-shaped';
        $diamond_shaped->save();

        $chest = new MuscleGroup();
        $chest->name = 'Chest';
        $chest->save();

        $arm = new MuscleGroup();
        $arm->name = 'Arm';
        $arm->save();
    }
}
