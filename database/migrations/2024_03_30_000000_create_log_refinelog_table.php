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
        Schema::connection('log')->create('refinelog', function (Blueprint $table) {
            $table->unsignedInteger('pid')->nullable();
            $table->string('item_name', 24)->default('');
            $table->integer('item_id')->default(0);
            $table->string('step', 50)->default('');
            $table->dateTime('time')->default('0000-00-00 00:00:00');
            $table->boolean('is_success')->default(false);
            $table->set('setType', ['SOCKET', 'POWER', 'ROD', 'GUILD', 'SCROLL', 'HYUNIRON', 'GOD_SCROLL', 'MUSIN_SCROLL'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('refinelog');
    }
};
