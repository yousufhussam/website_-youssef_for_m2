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
        Schema::connection('log')->create('loginlog', function (Blueprint $table) {
            $table->enum('type', ['LOGIN', 'LOGOUT'])->nullable();
            $table->dateTime('time')->nullable();
            $table->tinyInteger('channel')->nullable();
            $table->unsignedInteger('account_id')->nullable();
            $table->unsignedInteger('pid')->nullable();
            $table->smallInteger('level')->nullable();
            $table->tinyInteger('job')->nullable();
            $table->unsignedInteger('playtime')->nullable();

            $table->index(['pid', 'type'], 'pid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('loginlog');
    }
};
