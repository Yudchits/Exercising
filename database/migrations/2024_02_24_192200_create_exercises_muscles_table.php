<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('exercises_muscles', function (Blueprint $table) {
            $table->unsignedBigInteger('exercise_id');
            $table->unsignedBigInteger('muscle_id');

            $table->foreign('exercise_id')->references('id')->on('exercises')->cascadeOnDelete();
            $table->foreign('muscle_id')->references('id')->on('muscles')->cascadeOnDelete();

            $table->primary(['exercise_id', 'muscle_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('exercises_muscles');
    }
};
