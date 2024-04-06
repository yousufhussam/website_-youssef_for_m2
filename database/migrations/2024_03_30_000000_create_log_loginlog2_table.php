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
        Schema::connection('log')->create('loginlog2', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('type')->nullable();
            $table->integer('is_gm')->nullable();
            $table->dateTime('login_time')->nullable();
            $table->integer('channel')->nullable();
            $table->integer('account_id')->nullable();
            $table->integer('pid')->nullable();
            $table->text('client_version')->nullable();
            $table->text('ip')->nullable();
            $table->dateTime('logout_time')->nullable();
            $table->integer('playtime')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('loginlog2');
    }
};
