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
        Schema::create('stationtimetable', function (Blueprint $table) {
            $table->id();
            $table->foreignId('linId')->constrained('routes');
            $table->string('timStaName');
            $table->time('timTimeOnArrival');
            $table->time('timTimeOnDeparture');
            $table->string('timPlatform');
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
        //
    }
}
