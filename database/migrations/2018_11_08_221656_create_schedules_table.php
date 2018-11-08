<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cinema');
            $table->integer('id_film');
            $table->string('jam1')->default("00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000");
            $table->string('jam2')->default("00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000");
            $table->string('jam3')->default("00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000");
            $table->string('jam4')->default("00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000");
            $table->string('jam5')->default("00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
