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
        Schema::connection('common')->create('gmlist', function (Blueprint $table) {
            $table->increments('mID');
            $table->string('mAccount', 32)->default('');
            $table->string('mName', 32)->default('');
            $table->string('mContactIP', 16)->default('');
            $table->string('mServerIP', 16)->default('ALL');
            $table->enum('mAuthority', ['IMPLEMENTOR', 'HIGH_WIZARD', 'GOD', 'LOW_WIZARD', 'PLAYER'])->nullable()->default('PLAYER');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('common')->dropIfExists('gmlist');
    }
};
