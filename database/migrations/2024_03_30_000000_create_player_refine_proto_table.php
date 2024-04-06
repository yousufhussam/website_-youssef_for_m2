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
        Schema::connection('player')->create('refine_proto', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('vnum0')->default(0);
            $table->smallInteger('count0')->default(0);
            $table->unsignedInteger('vnum1')->default(0);
            $table->smallInteger('count1')->default(0);
            $table->unsignedInteger('vnum2')->default(0);
            $table->smallInteger('count2')->default(0);
            $table->unsignedInteger('vnum3')->default(0);
            $table->smallInteger('count3')->default(0);
            $table->unsignedInteger('vnum4')->default(0);
            $table->smallInteger('count4')->default(0);
            $table->integer('cost')->default(0);
            $table->unsignedInteger('src_vnum')->default(0);
            $table->unsignedInteger('result_vnum')->default(0);
            $table->smallInteger('prob')->default(100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('refine_proto');
    }
};
