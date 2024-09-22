<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('website')->create('guild_highscore_cache', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->text('name');
            $table->text('master');
            $table->integer('empire');
            $table->bigInteger('level');
            $table->bigInteger('ladder_point');
            $table->timestamp('date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('website')->dropIfExists('guild_highscore_cache');
    }
};
