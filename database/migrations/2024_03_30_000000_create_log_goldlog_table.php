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
        Schema::connection('log')->create('goldlog', function (Blueprint $table) {
            $table->string('date', 10)->default('0000-00-00')->index('date_idx');
            $table->string('time', 8)->default('00:00:00');
            $table->unsignedInteger('pid')->default(0)->index('pid_idx');
            $table->integer('what')->default(0)->index('what_idx');
            $table->set('how', ['BUY', 'SELL', 'SHOP_SELL', 'SHOP_BUY', 'EXCHANGE_TAKE', 'EXCHANGE_GIVE', 'QUEST'])->nullable()->index('how_idx');
            $table->string('hint', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('goldlog');
    }
};
