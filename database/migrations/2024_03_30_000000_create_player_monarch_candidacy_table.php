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
        Schema::connection('player')->create('monarch_candidacy', function (Blueprint $table) {
            $table->unsignedInteger('pid')->default(0)->primary();
            $table->dateTime('date')->nullable()->default('0000-00-00 00:00:00');
            $table->string('name', 16)->nullable();
            $table->dateTime('windate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('monarch_candidacy');
    }
};
