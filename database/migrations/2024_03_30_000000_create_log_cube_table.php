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
        Schema::connection('log')->create('cube', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pid')->default(0)->index('pid');
            $table->dateTime('time')->default('0000-00-00 00:00:00');
            $table->unsignedInteger('x')->default(0);
            $table->unsignedInteger('y')->default(0);
            $table->unsignedInteger('item_vnum')->default(0)->index('item_vnum');
            $table->unsignedInteger('item_uid')->default(0)->index('item_uid');
            $table->unsignedInteger('item_count')->default(0);
            $table->boolean('success')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('cube');
    }
};
