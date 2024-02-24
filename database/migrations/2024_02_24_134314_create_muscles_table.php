<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('muscles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('muscle_group_id');
            $table->foreign('muscle_group_id')->references('id')->on('muscle_groups')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('muscles');
    }
};
