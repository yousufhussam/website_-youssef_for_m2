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
        Schema::connection('player')->create('marriage', function (Blueprint $table) {
            $table->tinyInteger('is_married')->default(0);
            $table->unsignedInteger('pid1')->default(0);
            $table->unsignedInteger('pid2')->default(0);
            $table->unsignedInteger('love_point')->nullable();
            $table->unsignedInteger('time')->default(0);

            $table->primary(['pid1', 'pid2']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('marriage');
    }
};
