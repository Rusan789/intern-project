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
            $table->integer('route_id')->unsigned();
            $table->integer('operator_id')->unsigned();
            $table->foreign('route_id')
                ->references('id')
                ->on('routes')
                ->onDelete('cascade');

            $table->foreign('operator_id')
                ->references('id')
                ->on('operators')
                ->onDelete('cascade');
            
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
        Schema::dropIfExists('buses');
    }
}
