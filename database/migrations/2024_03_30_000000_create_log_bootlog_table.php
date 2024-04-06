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
        Schema::connection('log')->create('bootlog', function (Blueprint $table) {
            $table->dateTime('time')->default('0000-00-00 00:00:00');
            $table->char('hostname', 128)->default('UNKNOWN');
            $table->boolean('channel')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('bootlog');
    }
};
