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
        Schema::connection('player')->create('myshop_pricelist', function (Blueprint $table) {
            $table->unsignedInteger('owner_id')->default(0);
            $table->unsignedInteger('item_vnum')->default(0);
            $table->unsignedInteger('price')->default(0);

            $table->unique(['owner_id', 'item_vnum'], 'list_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('myshop_pricelist');
    }
};
