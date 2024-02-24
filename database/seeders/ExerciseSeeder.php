<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\Muscle;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    public function run()
    {
        $biceps = Muscle::where('name', 'Biceps')->first();
        $triceps = Muscle::where('name', 'Triceps')->first();
        $pectoralis_major = Muscle::where('name', 'Pectoralis major')->first();

        $french_push_up = new Exercise();
        $french_push_up->name = 'French push up';
        $french_push_up->description = 'Don\'t assist with core muscles. To low head below bar. Elbows along the head to unbend very slow.';
        $french_push_up->save();
        $french_push_up->muscles()->attach($biceps);

        $bench_press = new Exercise();
        $bench_press->name = 'Bench';
        $bench_press->description = 'The bench press, or chest press, is a weight training exercise where a person presses a weight upwards while lying horizontally on a weight training bench. Although the bench press is a compound movement, the muscles primarily used are the pectoralis major, the anterior deltoids, and the triceps, among other stabilizing muscles. A barbell is generally used to hold the weight, but a pair of dumbbells can also be used';
        $bench_press->save();
        $bench_press->muscles()->attach($triceps);
        $bench_press->muscles()->attach($pectoralis_major);
    }
}
