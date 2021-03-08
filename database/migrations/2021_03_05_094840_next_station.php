<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NextStation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nextStations', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignId('staId')->constrained('stations');
            $table->integer('nexTravelTime');
            $table->integer('nexAvgSpeed');
            $table->double('nexDistance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
