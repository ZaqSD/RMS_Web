<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StationTimetable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stationTimetable', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignId('linId')->constrained('lines');
            $table->string('timStaName');
            $table->double('timTimeOnArrival');
            $table->integer('timTimeonDeparture');
            $table->string('timPlatform');
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
