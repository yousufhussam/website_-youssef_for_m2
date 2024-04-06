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
        Schema::connection('player')->create('mob_proto', function (Blueprint $table) {
            $table->integer('vnum')->default(0)->primary();
            $table->string('name', 24)->default('Noname');
            $table->binary('locale_name')->default('Noname                  ');
            $table->tinyInteger('rank')->default(0);
            $table->tinyInteger('type')->default(0);
            $table->boolean('battle_type')->default(false);
            $table->smallInteger('level')->default(1);
            $table->enum('size', ['SMALL', 'MEDIUM', 'BIG'])->nullable()->default('SMALL');
            $table->set('ai_flag', ['AGGR', 'NOMOVE', 'COWARD', 'NOATTSHINSU', 'NOATTCHUNJO', 'NOATTJINNO', 'ATTMOB', 'BERSERK', 'STONESKIN', 'GODSPEED', 'DEATHBLOW', 'REVIVE'])->nullable();
            $table->tinyInteger('mount_capacity')->default(0);
            $table->set('setRaceFlag', ['ANIMAL', 'UNDEAD', 'DEVIL', 'HUMAN', 'ORC', 'MILGYO', 'INSECT', 'FIRE', 'ICE', 'DESERT', 'TREE', 'ATT_ELEC', 'ATT_FIRE', 'ATT_ICE', 'ATT_WIND', 'ATT_EARTH', 'ATT_DARK'])->default('');
            $table->set('setImmuneFlag', ['STUN', 'SLOW', 'FALL', 'CURSE', 'POISON', 'TERROR'])->default('');
            $table->tinyInteger('empire')->default(0);
            $table->string('folder', 100)->default('');
            $table->tinyInteger('on_click')->default(0);
            $table->unsignedSmallInteger('st')->default(0);
            $table->unsignedSmallInteger('dx')->default(0);
            $table->unsignedSmallInteger('ht')->default(0);
            $table->unsignedSmallInteger('iq')->default(0);
            $table->unsignedSmallInteger('damage_min')->default(0);
            $table->unsignedSmallInteger('damage_max')->default(0);
            $table->unsignedInteger('max_hp')->default(0);
            $table->unsignedTinyInteger('regen_cycle')->default(0);
            $table->unsignedTinyInteger('regen_percent')->default(0);
            $table->integer('gold_min')->default(0);
            $table->integer('gold_max')->default(0);
            $table->unsignedInteger('exp')->default(0);
            $table->unsignedSmallInteger('def')->default(0);
            $table->unsignedSmallInteger('attack_speed')->default(100);
            $table->unsignedSmallInteger('move_speed')->default(100);
            $table->unsignedTinyInteger('aggressive_hp_pct')->default(0);
            $table->unsignedSmallInteger('aggressive_sight')->default(0);
            $table->unsignedSmallInteger('attack_range')->default(0);
            $table->unsignedInteger('drop_item')->default(0);
            $table->unsignedInteger('resurrection_vnum')->default(0);
            $table->unsignedTinyInteger('enchant_curse')->default(0);
            $table->unsignedTinyInteger('enchant_slow')->default(0);
            $table->unsignedTinyInteger('enchant_poison')->default(0);
            $table->unsignedTinyInteger('enchant_stun')->default(0);
            $table->unsignedTinyInteger('enchant_critical')->default(0);
            $table->unsignedTinyInteger('enchant_penetrate')->default(0);
            $table->tinyInteger('resist_sword')->default(0);
            $table->tinyInteger('resist_twohand')->default(0);
            $table->tinyInteger('resist_dagger')->default(0);
            $table->tinyInteger('resist_bell')->default(0);
            $table->tinyInteger('resist_fan')->default(0);
            $table->tinyInteger('resist_bow')->default(0);
            $table->tinyInteger('resist_fire')->default(0);
            $table->tinyInteger('resist_elect')->default(0);
            $table->tinyInteger('resist_magic')->default(0);
            $table->tinyInteger('resist_wind')->default(0);
            $table->tinyInteger('resist_poison')->default(0);
            $table->float('dam_multiply', null, 0)->nullable();
            $table->integer('summon')->nullable();
            $table->integer('drain_sp')->nullable();
            $table->unsignedInteger('mob_color')->nullable();
            $table->unsignedInteger('polymorph_item')->default(0);
            $table->unsignedTinyInteger('skill_level0')->nullable();
            $table->unsignedInteger('skill_vnum0')->nullable();
            $table->unsignedTinyInteger('skill_level1')->nullable();
            $table->unsignedInteger('skill_vnum1')->nullable();
            $table->unsignedTinyInteger('skill_level2')->nullable();
            $table->unsignedInteger('skill_vnum2')->nullable();
            $table->unsignedTinyInteger('skill_level3')->nullable();
            $table->unsignedInteger('skill_vnum3')->nullable();
            $table->unsignedTinyInteger('skill_level4')->nullable();
            $table->unsignedInteger('skill_vnum4')->nullable();
            $table->tinyInteger('sp_berserk')->default(0);
            $table->tinyInteger('sp_stoneskin')->default(0);
            $table->tinyInteger('sp_godspeed')->default(0);
            $table->tinyInteger('sp_deathblow')->default(0);
            $table->tinyInteger('sp_revive')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('mob_proto');
    }
};
