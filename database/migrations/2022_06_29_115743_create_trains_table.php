<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('departure_station', 40);
            $table->string('arrival_station', 40);
            $table->time('departure_time', 4);
            $table->time('arrival_time', 4);
            $table->integer('code_train');
            $table->tinyInteger('carriage_number');
            $table->boolean('hours_delay');
            $table->boolean('hours_delay');
            $table->boolean('deleted');
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
        Schema::dropIfExists('trains');
    }
}
