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
        Schema::connection('log')->create('change_name', function (Blueprint $table) {
            $table->integer('pid')->nullable();
            $table->string('old_name')->nullable();
            $table->string('new_name')->nullable();
            $table->dateTime('time')->nullable();
            $table->string('ip', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('log')->dropIfExists('change_name');
    }
};
