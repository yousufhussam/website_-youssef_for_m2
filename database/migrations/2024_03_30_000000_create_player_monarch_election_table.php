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
        Schema::connection('player')->create('monarch_election', function (Blueprint $table) {
            $table->unsignedInteger('pid')->default(0)->primary();
            $table->unsignedInteger('selectedpid')->nullable()->default(0);
            $table->dateTime('electiondata')->nullable()->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('monarch_election');
    }
};
