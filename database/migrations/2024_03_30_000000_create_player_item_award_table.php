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
        Schema::connection('player')->create('item_award', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('pid')->default(0)->index('pid_idx');
            $table->string('login', 30)->default('');
            $table->unsignedInteger('vnum')->default(0);
            $table->unsignedInteger('count')->default(0);
            $table->dateTime('given_time')->default('0000-00-00 00:00:00')->index('given_time_idx');
            $table->dateTime('taken_time')->nullable()->index('taken_time_idx');
            $table->integer('item_id')->nullable();
            $table->string('why', 128)->nullable();
            $table->integer('socket0')->default(0);
            $table->integer('socket1')->default(0);
            $table->integer('socket2')->default(0);
            $table->boolean('mall')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('item_award');
    }
};
