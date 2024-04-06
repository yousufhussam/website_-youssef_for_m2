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
        Schema::connection('player')->create('object_proto', function (Blueprint $table) {
            $table->unsignedInteger('vnum')->default(0)->primary();
            $table->string('name', 32)->default('');
            $table->unsignedInteger('price')->default(0);
            $table->string('materials', 64)->default('');
            $table->unsignedInteger('upgrade_vnum')->default(0);
            $table->unsignedInteger('upgrade_limit_time')->default(0);
            $table->integer('life')->default(0);
            $table->integer('reg_1')->default(0);
            $table->integer('reg_2')->default(0);
            $table->integer('reg_3')->default(0);
            $table->integer('reg_4')->default(0);
            $table->unsignedInteger('npc')->default(0);
            $table->unsignedInteger('group_vnum')->default(0);
            $table->unsignedInteger('dependent_group')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('object_proto');
    }
};
