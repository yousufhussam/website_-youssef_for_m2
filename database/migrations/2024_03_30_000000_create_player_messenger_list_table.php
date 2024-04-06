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
        Schema::connection('player')->create('messenger_list', function (Blueprint $table) {
            $table->string('account', 16)->default('');
            $table->string('companion', 16)->default('');

            $table->primary(['account', 'companion']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('messenger_list');
    }
};
