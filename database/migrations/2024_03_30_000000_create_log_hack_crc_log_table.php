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
        Schema::connection('log')->create('hack_crc_log', function (Blueprint $table) {
            $table->dateTime('time')->default('0000-00-00 00:00:00');
            $table->char('login', 16)->default('');
            $table->char('name', 24)->default('');
            $table->char('ip', 15)->default('');
            $table->char('server', 100)->default('');
            $table->char('why')->default('');
            $table->integer('crc')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('hack_crc_log');
    }
};
