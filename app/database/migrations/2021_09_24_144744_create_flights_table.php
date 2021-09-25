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
            $table->bigInteger('dest_airport')->default(0); // airport id
            $table->bigInteger('depart_airport')->default(0); // airport id --> malaga international --> get them to enter id in view and have side by side name and id
            $table->string('depart_date');
            $table->string('dest_date');
            $table->string('depart_time');
            $table->string('dest_time');
            $table->string('duration');
            $table->bigInteger('ticket_id')->default(0);
            $table->decimal('price', $precision=8, $scale=2)->default(00.00);
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
