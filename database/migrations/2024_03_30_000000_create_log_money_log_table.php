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
        Schema::connection('log')->create('money_log', function (Blueprint $table) {
            $table->dateTime('time')->nullable();
            $table->enum('type', ['MONSTER', 'SHOP', 'REFINE', 'QUEST', 'GUILD', 'MISC', 'KILL', 'DROP'])->nullable();
            $table->integer('vnum')->default(0);
            $table->integer('gold')->default(0);

            $table->index(['type', 'vnum'], 'type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('money_log');
    }
};
