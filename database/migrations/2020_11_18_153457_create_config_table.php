<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fontcolor');
            $table->string('linecolor');
            $table->string('backgroundcolor');
            $table->string('yaxis');
            $table->string('baraxis');
            $table->string('sizeheight');
            $table->string('barwidth');
            $table->string('interval');
            $table->string('legendType');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('config');
    }
}
