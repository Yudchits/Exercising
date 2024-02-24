<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Muscle extends Model
{
    public $timestamps = false;

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'exercises_muscles');
    }
}
