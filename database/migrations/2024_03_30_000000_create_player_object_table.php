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
        Schema::connection('player')->create('object', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('land_id')->default(0);
            $table->unsignedInteger('vnum')->default(0);
            $table->integer('map_index')->default(0);
            $table->integer('x')->default(0);
            $table->integer('y')->default(0);
            $table->float('x_rot', null, 0)->default(0);
            $table->float('y_rot', null, 0)->default(0);
            $table->float('z_rot', null, 0)->default(0);
            $table->integer('life')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('object');
    }
};
