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
        Schema::connection('player')->create('quest', function (Blueprint $table) {
            $table->unsignedInteger('dwPID')->default(0)->index('pid_idx');
            $table->string('szName', 32)->default('')->index('name_idx');
            $table->string('szState', 64)->default('')->index('state_idx');
            $table->integer('lValue')->default(0);

            $table->primary(['dwPID', 'szName', 'szState']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('quest');
    }
};
