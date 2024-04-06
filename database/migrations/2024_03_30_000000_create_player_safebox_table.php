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
        Schema::connection('player')->create('safebox', function (Blueprint $table) {
            $table->unsignedInteger('account_id')->default(0)->primary();
            $table->unsignedTinyInteger('size')->default(0);
            $table->string('password', 6)->default('');
            $table->integer('gold')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('safebox');
    }
};
