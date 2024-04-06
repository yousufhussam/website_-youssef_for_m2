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
        Schema::connection('player')->create('guild_war_bet', function (Blueprint $table) {
            $table->string('login', 24)->default('');
            $table->unsignedInteger('gold')->default(0);
            $table->integer('guild')->default(0);
            $table->unsignedInteger('war_id')->default(0);

            $table->primary(['war_id', 'login']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('guild_war_bet');
    }
};
