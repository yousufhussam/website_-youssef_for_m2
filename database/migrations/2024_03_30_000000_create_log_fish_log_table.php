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
        Schema::connection('log')->create('fish_log', function (Blueprint $table) {
            $table->dateTime('time')->default('0000-00-00 00:00:00');
            $table->unsignedInteger('player_id')->default(0);
            $table->tinyInteger('map_index')->default(0);
            $table->unsignedInteger('fish_id')->default(0);
            $table->integer('fishing_level')->default(0);
            $table->integer('waiting_time')->default(0);
            $table->tinyInteger('success')->default(0);
            $table->smallInteger('size')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('fish_log');
    }
};
