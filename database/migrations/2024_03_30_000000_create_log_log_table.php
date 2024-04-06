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
        Schema::connection('log')->create('log', function (Blueprint $table) {
            $table->enum('type', ['ITEM', 'CHARACTER'])->default('ITEM');
            $table->dateTime('time')->default('0000-00-00 00:00:00');
            $table->unsignedInteger('who')->default(0)->index('who_idx');
            $table->unsignedInteger('x')->default(0);
            $table->unsignedInteger('y')->default(0);
            $table->integer('what')->default(0)->index('what_idx');
            $table->string('how', 50)->default('')->index('how_idx');
            $table->string('hint', 70)->nullable();
            $table->string('ip', 20)->nullable();
            $table->integer('vnum')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('log');
    }
};
