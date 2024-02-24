<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('muscle_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('muscle_groups');
    }
};
