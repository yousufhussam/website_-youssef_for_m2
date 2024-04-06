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
        Schema::connection('player')->create('guild_comment', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('guild_id')->nullable()->index('guild_id');
            $table->string('name', 8)->nullable();
            $table->tinyInteger('notice')->nullable();
            $table->string('content', 50)->nullable();
            $table->dateTime('time')->nullable();

            $table->index(['notice', 'id', 'guild_id'], 'aaa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('guild_comment');
    }
};
