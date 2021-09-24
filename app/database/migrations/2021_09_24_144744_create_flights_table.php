<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('capacity');
            $table->bigInteger('dest_airport'); // airport id
            $table->bigInteger('depart_airport'); // airport id --> malaga international --> get them to enter id in view and have side by side name and id
            $table->string('depart_date');
            $table->string('dest_date');
            $table->string('depart_time');
            $table->string('dest_time');
            $table->string('duration');
            $table->bigInteger('ticket_id');
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
        Schema::dropIfExists('flights');
    }
}
