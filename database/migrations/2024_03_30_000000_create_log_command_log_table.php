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
        Schema::connection('log')->create('command_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('userid')->default(0);
            $table->integer('server')->default(0);
            $table->string('ip', 15)->default('');
            $table->integer('port')->default(0);
            $table->string('username', 50)->default('');
            $table->text('command');
            $table->dateTime('date')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('command_log');
    }
};
