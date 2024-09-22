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
        Schema::connection('website')->create('mall_data', function (Blueprint $table) {
            $table->unsignedInteger('vnum')->default(0)->primary();
            $table->unsignedInteger('socket0')->default(0);
            $table->unsignedInteger('socket1')->default(0);
            $table->unsignedInteger('socket2')->default(0);
            $table->unsignedInteger('socket3')->default(0);
            $table->unsignedInteger('socket4')->default(0);
            $table->unsignedInteger('socket5')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('website')->dropIfExists('mall_data');
    }
};
