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

            $table->string('company_name', 50);
            $table->string('station_departure', 50);
            $table->string('station_arrival', 50);
            $table->string('time_departure', 5);
            $table->string('time_arrival', 5);
            $table->tinyInteger('train_code');
            $table->string('number_train_carriages')->nullable();
            $table->boolean('is_time')->nullable();
            $table->boolean('is_deleted')->nullable();

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
