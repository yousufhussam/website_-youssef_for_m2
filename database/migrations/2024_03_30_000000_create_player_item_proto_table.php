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
        Schema::connection('player')->create('item_proto', function (Blueprint $table) {
            $table->unsignedInteger('vnum')->default(0)->primary();
            $table->binary('name', length: 24)->default('Noname');
            $table->binary('locale_name', length: 24)->default('Noname');
            $table->tinyInteger('type')->default(0);
            $table->tinyInteger('subtype')->default(0);
            $table->tinyInteger('weight')->nullable()->default(0);
            $table->tinyInteger('size')->nullable()->default(0);
            $table->integer('antiflag')->nullable()->default(0);
            $table->integer('flag')->nullable()->default(0);
            $table->integer('wearflag')->nullable()->default(0);
            $table->set('immuneflag', ['PARA', 'CURSE', 'STUN', 'SLEEP', 'SLOW', 'POISON', 'TERROR'])->default('');
            $table->integer('gold')->nullable()->default(0);
            $table->unsignedInteger('shop_buy_price')->default(0);
            $table->unsignedInteger('refined_vnum')->default(0);
            $table->unsignedSmallInteger('refine_set')->default(0);
            $table->unsignedSmallInteger('refine_set2')->default(0);
            $table->tinyInteger('magic_pct')->default(0);
            $table->tinyInteger('limittype0')->nullable()->default(0);
            $table->integer('limitvalue0')->nullable()->default(0);
            $table->tinyInteger('limittype1')->nullable()->default(0);
            $table->integer('limitvalue1')->nullable()->default(0);
            $table->tinyInteger('applytype0')->nullable()->default(0);
            $table->integer('applyvalue0')->nullable()->default(0);
            $table->tinyInteger('applytype1')->nullable()->default(0);
            $table->integer('applyvalue1')->nullable()->default(0);
            $table->tinyInteger('applytype2')->nullable()->default(0);
            $table->integer('applyvalue2')->nullable()->default(0);
            $table->integer('value0')->nullable()->default(0);
            $table->integer('value1')->nullable()->default(0);
            $table->integer('value2')->nullable()->default(0);
            $table->integer('value3')->nullable()->default(0);
            $table->integer('value4')->nullable()->default(0);
            $table->integer('value5')->nullable()->default(0);
            $table->tinyInteger('socket0')->nullable()->default(-1);
            $table->tinyInteger('socket1')->nullable()->default(-1);
            $table->tinyInteger('socket2')->nullable()->default(-1);
            $table->tinyInteger('socket3')->nullable()->default(-1);
            $table->tinyInteger('socket4')->nullable()->default(-1);
            $table->tinyInteger('socket5')->nullable()->default(-1);
            $table->tinyInteger('specular')->default(0);
            $table->tinyInteger('socket_pct')->default(0);
            $table->smallInteger('addon_type')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('item_proto');
    }
};
