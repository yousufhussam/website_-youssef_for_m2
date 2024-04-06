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
        Schema::connection('log')->create('levellog', function (Blueprint $table) {
            $table->char('name', 24)->default('');
            $table->tinyInteger('level')->default(0);
            $table->dateTime('time')->default('0000-00-00 00:00:00');
            $table->integer('playtime')->default(0);
            $table->integer('account_id');
            $table->integer('pid');

            $table->primary(['name', 'level']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('levellog');
    }
};
