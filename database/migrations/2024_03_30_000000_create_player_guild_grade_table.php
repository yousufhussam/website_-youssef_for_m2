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
        Schema::connection('player')->create('guild_grade', function (Blueprint $table) {
            $table->integer('guild_id')->default(0);
            $table->tinyInteger('grade')->default(0);
            $table->string('name', 8)->default('');
            $table->set('auth', ['ADD_MEMBER', 'REMOVE_MEMEBER', 'NOTICE', 'USE_SKILL'])->nullable();

            $table->primary(['guild_id', 'grade']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('guild_grade');
    }
};
