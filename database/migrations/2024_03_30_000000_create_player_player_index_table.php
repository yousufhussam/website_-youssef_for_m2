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
        Schema::connection('player')->create('player_index', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->integer('pid1')->default(0)->index('pid1_key');
            $table->integer('pid2')->default(0)->index('pid2_key');
            $table->integer('pid3')->default(0)->index('pid3_key');
            $table->integer('pid4')->default(0)->index('pid4_key');
            $table->tinyInteger('empire')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('player_index');
    }
};
