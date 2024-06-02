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
        Schema::connection('account')->create('account', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('login', 30)->default('')->unique('login');
            $table->text('password')->default('');
            $table->string('social_id', 13)->default('')->index('social_id');
            $table->string('email', 64)->default('');
            $table->dateTime('create_time')->default('0000-00-00 00:00:00');
            $table->string('status', 8)->default('OK');
            $table->string('securitycode', 192)->nullable()->default('');
            $table->dateTime('availDt')->default('0000-00-00 00:00:00');
            $table->integer('mileage')->default(0);
            $table->integer('cash')->default(0);
            $table->dateTime('gold_expire')->default('0000-00-00 00:00:00');
            $table->dateTime('silver_expire')->default('0000-00-00 00:00:00');
            $table->dateTime('safebox_expire')->default('0000-00-00 00:00:00');
            $table->dateTime('autoloot_expire')->default('0000-00-00 00:00:00');
            $table->dateTime('fish_mind_expire')->default('0000-00-00 00:00:00');
            $table->dateTime('marriage_fast_expire')->default('0000-00-00 00:00:00');
            $table->dateTime('money_drop_rate_expire')->default('0000-00-00 00:00:00');
            $table->string('ip')->nullable();
            $table->dateTime('last_play');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('account')->dropIfExists('account');
    }
};
