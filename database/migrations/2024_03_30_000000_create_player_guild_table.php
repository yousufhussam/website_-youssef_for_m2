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
        Schema::connection('player')->create('guild', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 12)->default('');
            $table->smallInteger('sp')->default(1000);
            $table->unsignedInteger('master')->default(0);
            $table->tinyInteger('level')->nullable();
            $table->integer('exp')->nullable();
            $table->tinyInteger('skill_point')->default(0);
            $table->binary('skill')->nullable();
            $table->integer('win')->default(0);
            $table->integer('draw')->default(0);
            $table->integer('loss')->default(0);
            $table->integer('ladder_point')->default(0);
            $table->integer('gold')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('guild');
    }
};
