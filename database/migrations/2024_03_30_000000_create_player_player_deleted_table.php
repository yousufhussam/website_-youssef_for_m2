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
        Schema::connection('player')->create('player_deleted', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('account_id')->default(0)->index('account_id_idx');
            $table->string('name', 24)->default('NONAME')->index('name_idx');
            $table->unsignedTinyInteger('job')->default(0);
            $table->boolean('voice')->unsigned()->default(false);
            $table->tinyInteger('dir')->default(0);
            $table->integer('x')->default(0);
            $table->integer('y')->default(0);
            $table->integer('z')->default(0);
            $table->integer('map_index')->default(0);
            $table->integer('exit_x')->default(0);
            $table->integer('exit_y')->default(0);
            $table->integer('exit_map_index')->default(0);
            $table->smallInteger('hp')->default(0);
            $table->smallInteger('mp')->default(0);
            $table->smallInteger('stamina')->default(0);
            $table->unsignedSmallInteger('random_hp')->default(0);
            $table->unsignedSmallInteger('random_sp')->default(0);
            $table->integer('playtime')->default(0);
            $table->unsignedTinyInteger('level')->default(1);
            $table->boolean('level_step')->default(false);
            $table->smallInteger('st')->default(0);
            $table->smallInteger('ht')->default(0);
            $table->smallInteger('dx')->default(0);
            $table->smallInteger('iq')->default(0);
            $table->integer('exp')->default(0);
            $table->integer('gold')->default(0);
            $table->smallInteger('stat_point')->default(0);
            $table->smallInteger('skill_point')->default(0);
            $table->binary('quickslot')->nullable();
            $table->string('ip', 15)->nullable()->default('0.0.0.0');
            $table->mediumInteger('part_main')->default(0);
            $table->tinyInteger('part_base')->default(0);
            $table->mediumInteger('part_hair')->default(0);
            $table->tinyInteger('skill_group')->default(0);
            $table->binary('skill_level')->nullable();
            $table->integer('alignment')->default(0);
            $table->dateTime('last_play')->default('0000-00-00 00:00:00');
            $table->boolean('change_name')->default(false);
            $table->smallInteger('sub_skill_point')->default(0);
            $table->tinyInteger('stat_reset_count')->default(0);
            $table->smallInteger('horse_hp')->default(0);
            $table->smallInteger('horse_stamina')->default(0);
            $table->unsignedTinyInteger('horse_level')->default(0);
            $table->unsignedInteger('horse_hp_droptime')->default(0);
            $table->boolean('horse_riding')->default(false);
            $table->smallInteger('horse_skill_point')->default(0);
            $table->integer('bank_value')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('player_deleted');
    }
};
