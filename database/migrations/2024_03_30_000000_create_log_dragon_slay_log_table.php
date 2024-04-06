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
        Schema::connection('log')->create('dragon_slay_log', function (Blueprint $table) {
            $table->unsignedInteger('guild_id');
            $table->unsignedInteger('vnum');
            $table->timestamp('start_time')->default('0000-00-00 00:00:00');
            $table->timestamp('end_time')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('dragon_slay_log');
    }
};
