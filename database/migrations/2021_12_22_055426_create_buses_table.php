<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('bus_name');
            $table->string('facilities');
            $table->string('time');
            $table->string('price');
            $table->string('img');
            $table->string('driver_name');
            $table->string('bus_number');
            $table->unsignedBigInteger('operator_id');
            $table->timestamps();
            $table->unsignedBigInteger('route_id')->unsigned()->nullable();
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}
