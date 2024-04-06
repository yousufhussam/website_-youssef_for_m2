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
        Schema::connection('player')->create('affect', function (Blueprint $table) {
            $table->unsignedInteger('dwPID')->default(0);
            $table->unsignedSmallInteger('bType')->default(0);
            $table->unsignedTinyInteger('bApplyOn')->default(0);
            $table->integer('lApplyValue')->default(0);
            $table->unsignedInteger('dwFlag')->default(0);
            $table->integer('lDuration')->default(0);
            $table->integer('lSPCost')->default(0);

            $table->primary(['dwPID', 'bType', 'bApplyOn', 'lApplyValue']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('affect');
    }
};
