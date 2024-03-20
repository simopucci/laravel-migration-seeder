<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('agency', 50);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->string('departure_time', 5);
            $table->string('arrival_time', 5);
            $table->char('train_code', 10);
            $table->tinyInteger('carriages_number');
            $table->string('in_time', 5);
            $table->string('cancelled', 5);
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
};
