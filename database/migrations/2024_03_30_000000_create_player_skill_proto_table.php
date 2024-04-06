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
        Schema::connection('player')->create('skill_proto', function (Blueprint $table) {
            $table->integer('dwVnum')->default(0)->primary();
            $table->string('szName', 32)->default('');
            $table->tinyInteger('bType')->default(0);
            $table->tinyInteger('bLevelStep')->default(0);
            $table->tinyInteger('bMaxLevel')->default(0);
            $table->unsignedTinyInteger('bLevelLimit')->default(0);
            $table->string('szPointOn', 100)->default('0');
            $table->string('szPointPoly', 100)->default('');
            $table->string('szSPCostPoly', 100)->default('');
            $table->string('szDurationPoly', 100)->default('');
            $table->string('szDurationSPCostPoly', 100)->default('');
            $table->string('szCooldownPoly', 100)->default('');
            $table->string('szMasterBonusPoly', 100)->default('');
            $table->string('szAttackGradePoly', 100)->default('');
            $table->set('setFlag', ['ATTACK', 'USE_MELEE_DAMAGE', 'COMPUTE_ATTGRADE', 'SELFONLY', 'USE_MAGIC_DAMAGE', 'USE_HP_AS_COST', 'COMPUTE_MAGIC_DAMAGE', 'SPLASH', 'GIVE_PENALTY', 'USE_ARROW_DAMAGE', 'PENETRATE', 'IGNORE_TARGET_RATING', 'ATTACK_SLOW', 'ATTACK_STUN', 'HP_ABSORB', 'SP_ABSORB', 'ATTACK_FIRE_CONT', 'REMOVE_BAD_AFFECT', 'REMOVE_GOOD_AFFECT', 'CRUSH', 'ATTACK_POISON', 'TOGGLE', 'DISABLE_BY_POINT_UP', 'CRUSH_LONG'])->nullable();
            $table->enum('setAffectFlag', ['YMIR', 'INVISIBILITY', 'SPAWN', 'POISON', 'SLOW', 'STUN', 'DUNGEON_READY', 'FORCE_VISIBLE', 'BUILDING_CONSTRUCTION_SMALL', 'BUILDING_CONSTRUCTION_LARGE', 'BUILDING_UPGRADE', 'MOV_SPEED_POTION', 'ATT_SPEED_POTION', 'FISH_MIDE', 'JEONGWIHON', 'GEOMGYEONG', 'CHEONGEUN', 'GYEONGGONG', 'EUNHYUNG', 'GWIGUM', 'TERROR', 'JUMAGAP', 'HOSIN', 'BOHO', 'KWAESOK', 'MANASHIELD', 'MUYEONG', 'REVIVE_INVISIBLE', 'FIRE', 'GICHEON', 'JEUNGRYEOK'])->default('YMIR');
            $table->string('szPointOn2', 100)->default('NONE');
            $table->string('szPointPoly2', 100)->default('');
            $table->string('szDurationPoly2', 100)->default('');
            $table->enum('setAffectFlag2', ['YMIR', 'INVISIBILITY', 'SPAWN', 'POISON', 'SLOW', 'STUN', 'DUNGEON_READY', 'FORCE_VISIBLE', 'BUILDING_CONSTRUCTION_SMALL', 'BUILDING_CONSTRUCTION_LARGE', 'BUILDING_UPGRADE', 'MOV_SPEED_POTION', 'ATT_SPEED_POTION', 'FISH_MIDE', 'JEONGWIHON', 'GEOMGYEONG', 'CHEONGEUN', 'GYEONGGONG', 'EUNHYUNG', 'GWIGUM', 'TERROR', 'JUMAGAP', 'HOSIN', 'BOHO', 'KWAESOK', 'MANASHIELD'])->default('YMIR');
            $table->string('szPointOn3', 100)->default('NONE');
            $table->string('szPointPoly3', 100)->default('');
            $table->string('szDurationPoly3', 100)->default('');
            $table->string('szGrandMasterAddSPCostPoly', 100)->default('');
            $table->integer('prerequisiteSkillVnum')->default(0);
            $table->integer('prerequisiteSkillLevel')->default(0);
            $table->enum('eSkillType', ['NORMAL', 'MELEE', 'RANGE', 'MAGIC'])->default('NORMAL');
            $table->tinyInteger('iMaxHit')->default(0);
            $table->string('szSplashAroundDamageAdjustPoly', 100)->default('1');
            $table->integer('dwTargetRange')->default(1000);
            $table->unsignedInteger('dwSplashRange')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('skill_proto');
    }
};
