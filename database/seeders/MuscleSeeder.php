<?php

namespace Database\Seeders;

use App\Models\Muscle;
use App\Models\MuscleGroup;
use Illuminate\Database\Seeder;

class MuscleSeeder extends Seeder
{
    public function run()
    {
        $arm_group = MuscleGroup::where('name', 'Arm')->first();

        $biceps = new Muscle();
        $biceps->name = 'Biceps';
        $biceps->muscle_group_id = $arm_group->id;
        $biceps->save();

        $triceps = new Muscle();
        $triceps->name = 'Triceps';
        $triceps->muscle_group_id = $arm_group->id;
        $triceps->save();

        $chest_group = MuscleGroup::where('name', 'Chest')->first();

        $pectoralis_major = new Muscle();
        $pectoralis_major->name = 'Pectoralis major';
        $pectoralis_major->muscle_group_id = $chest_group->id;
        $pectoralis_major->save();

        $pectoralis_minor = new Muscle();
        $pectoralis_minor->name = 'Pectoralis minor';
        $pectoralis_minor->muscle_group_id = $chest_group->id;
        $pectoralis_minor->save();
    }
}
