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
        Schema::connection('player')->create('shop_item', function (Blueprint $table) {
            $table->integer('shop_vnum')->default(0);
            $table->integer('item_vnum')->default(0);
            $table->unsignedTinyInteger('count')->default(1);

            $table->unique(['shop_vnum', 'item_vnum', 'count'], 'vnum_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('shop_item');
    }
};
