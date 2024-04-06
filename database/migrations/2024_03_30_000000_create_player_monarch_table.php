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
        Schema::connection('player')->create('monarch', function (Blueprint $table) {
            $table->unsignedInteger('empire')->default(0)->primary();
            $table->unsignedInteger('pid')->nullable();
            $table->dateTime('windate')->nullable();
            $table->unsignedBigInteger('money')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('monarch');
    }
};
