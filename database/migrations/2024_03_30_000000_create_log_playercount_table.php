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
        Schema::connection('log')->create('playercount', function (Blueprint $table) {
            $table->dateTime('date')->nullable();
            $table->integer('count_red')->nullable();
            $table->integer('count_yellow')->nullable();
            $table->integer('count_blue')->nullable();
            $table->integer('count_total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('playercount');
    }
};
