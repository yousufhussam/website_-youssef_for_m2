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
        Schema::connection('player')->create('guild_member', function (Blueprint $table) {
            $table->unsignedInteger('pid')->default(0)->unique('pid');
            $table->unsignedInteger('guild_id')->default(0);
            $table->tinyInteger('grade')->nullable();
            $table->boolean('is_general')->default(false);
            $table->unsignedInteger('offer')->nullable();

            $table->primary(['guild_id', 'pid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('guild_member');
    }
};
