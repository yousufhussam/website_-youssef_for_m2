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
        Schema::connection('log')->create('hackshield_log', function (Blueprint $table) {
            $table->unsignedInteger('pid')->default(0);
            $table->string('login', 32)->nullable();
            $table->unsignedInteger('account_id');
            $table->string('name', 25)->nullable();
            $table->dateTime('time')->default('0000-00-00 00:00:00');
            $table->string('reason', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('hackshield_log');
    }
};
