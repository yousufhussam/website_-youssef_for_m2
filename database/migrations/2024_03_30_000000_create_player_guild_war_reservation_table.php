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
        Schema::connection('player')->create('guild_war_reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('guild1')->default(0);
            $table->unsignedInteger('guild2')->default(0);
            $table->dateTime('time')->default('0000-00-00 00:00:00');
            $table->unsignedTinyInteger('type')->default(0);
            $table->unsignedInteger('warprice')->default(0);
            $table->unsignedInteger('initscore')->default(0);
            $table->boolean('started')->default(false);
            $table->unsignedInteger('bet_from')->default(0);
            $table->unsignedInteger('bet_to')->default(0);
            $table->integer('winner')->default(-1);
            $table->integer('power1')->default(0);
            $table->integer('power2')->default(0);
            $table->integer('handicap')->default(0);
            $table->integer('result1')->default(0);
            $table->integer('result2')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('guild_war_reservation');
    }
};
