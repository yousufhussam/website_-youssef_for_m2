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
        Schema::connection('log')->create('quest_reward_log', function (Blueprint $table) {
            $table->string('quest_name', 32)->nullable();
            $table->unsignedInteger('player_id')->nullable()->index('player_id');
            $table->tinyInteger('player_level')->nullable();
            $table->enum('reward_type', ['EXP', 'ITEM'])->nullable();
            $table->unsignedInteger('reward_value1')->nullable();
            $table->integer('reward_value2')->nullable();
            $table->dateTime('time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('quest_reward_log');
    }
};
