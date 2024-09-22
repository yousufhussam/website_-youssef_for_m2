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
        Schema::connection('website')->create('mall_storage', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->unsignedInteger('owner_id')->default(0)->index('owner_id_idx');
            $table->unsignedTinyInteger('count')->default(0);
            $table->unsignedInteger('vnum')->default(0)->index('item_vnum_index');
            $table->unsignedInteger('socket0')->default(0);
            $table->unsignedInteger('socket1')->default(0);
            $table->unsignedInteger('socket2')->default(0);
            $table->unsignedInteger('socket3')->default(0);
            $table->unsignedInteger('socket4')->default(0);
            $table->unsignedInteger('socket5')->default(0);
            $table->tinyInteger('attrtype0')->default(0);
            $table->smallInteger('attrvalue0')->default(0);
            $table->tinyInteger('attrtype1')->default(0);
            $table->smallInteger('attrvalue1')->default(0);
            $table->tinyInteger('attrtype2')->default(0);
            $table->smallInteger('attrvalue2')->default(0);
            $table->tinyInteger('attrtype3')->default(0);
            $table->smallInteger('attrvalue3')->default(0);
            $table->tinyInteger('attrtype4')->default(0);
            $table->smallInteger('attrvalue4')->default(0);
            $table->tinyInteger('attrtype5')->default(0);
            $table->smallInteger('attrvalue5')->default(0);
            $table->tinyInteger('attrtype6')->default(0);
            $table->smallInteger('attrvalue6')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('website')->dropIfExists('mall_storage');
    }
};
