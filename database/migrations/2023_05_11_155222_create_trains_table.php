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
            $table->datetime('time_departure')->nullable();
            $table->datetime('time_arrival')->nullable();
            $table->tinyInteger('train_code')->nullable();
            $table->string('number_train_carriages')->nullable();
            $table->boolean('is_in_time')->nullable();
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
