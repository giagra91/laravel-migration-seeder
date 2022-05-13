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
            $table->string("agency", 50);
            $table->string("departure_station", 50);
            $table->string("arrival_station", 50);
            $table->time("departure_time");
            $table->time('arrival_time');
            $table->smallInteger("train_code", false, true);
            $table->tinyInteger("carriages_number", false, true);
            $table->boolean("is_in_time");
            $table->boolean("is_deleted");
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
