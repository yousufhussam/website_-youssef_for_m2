<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\File;
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
        Schema::connection('player')->create('item_attr', function (Blueprint $table) {
            $table->enum('apply', ['MAX_HP', 'MAX_SP', 'CON', 'INT', 'STR', 'DEX', 'ATT_SPEED', 'MOV_SPEED', 'CAST_SPEED', 'HP_REGEN', 'SP_REGEN', 'POISON_PCT', 'STUN_PCT', 'SLOW_PCT', 'CRITICAL_PCT', 'PENETRATE_PCT', 'ATTBONUS_HUMAN', 'ATTBONUS_ANIMAL', 'ATTBONUS_ORC', 'ATTBONUS_MILGYO', 'ATTBONUS_UNDEAD', 'ATTBONUS_DEVIL', 'STEAL_HP', 'STEAL_SP', 'MANA_BURN_PCT', 'DAMAGE_SP_RECOVER', 'BLOCK', 'DODGE', 'RESIST_SWORD', 'RESIST_TWOHAND', 'RESIST_DAGGER', 'RESIST_BELL', 'RESIST_FAN', 'RESIST_BOW', 'RESIST_FIRE', 'RESIST_ELEC', 'RESIST_MAGIC', 'RESIST_WIND', 'REFLECT_MELEE', 'REFLECT_CURSE', 'POISON_REDUCE', 'KILL_SP_RECOVER', 'EXP_DOUBLE_BONUS', 'GOLD_DOUBLE_BONUS', 'ITEM_DROP_BONUS', 'POTION_BONUS', 'KILL_HP_RECOVER', 'IMMUNE_STUN', 'IMMUNE_SLOW', 'IMMUNE_FALL', 'SKILL', 'BOW_DISTANCE', 'ATT_GRADE_BONUS', 'DEF_GRADE_BONUS', 'MAGIC_ATT_GRADE', 'MAGIC_DEF_GRADE', 'CURSE_PCT', 'MAX_STAMINA', 'ATTBONUS_WARRIOR', 'ATTBONUS_ASSASSIN', 'ATTBONUS_SURA', 'ATTBONUS_SHAMAN', 'ATTBONUS_MONSTER', 'MALL_ATTBONUS', 'MALL_DEFBONUS', 'MALL_EXPBONUS', 'MALL_ITEMBONUS', 'MALL_GOLDBONUS', 'MAX_HP_PCT', 'MAX_SP_PCT', 'SKILL_DAMAGE_BONUS', 'NORMAL_HIT_DAMAGE_BONUS', 'SKILL_DEFEND_BONUS', 'NORMAL_HIT_DEFEND_BONUS', 'PC_BANG_EXP_BONUS', 'PC_BANG_DROP_BONUS', 'EXTRACT_HP_PCT', 'RESIST_WARRIOR', 'RESIST_ASSASSIN', 'RESIST_SURA', 'RESIST_SHAMAN', 'ENERGY', 'DEF_GRADE', 'COSTUME_ATTR_BONUS', 'MAGIC_ATTBONUS_PER', 'MELEE_MAGIC_ATTBONUS_PER', 'RESIST_ICE', 'RESIST_EARTH', 'RESIST_DARK', 'ANTI_CRITICAL_PCT', 'ANTI_PENETRATE_PCT'])->default('MAX_HP');
            $table->string('prob', 100)->default('');
            $table->string('lv1', 100)->default('');
            $table->string('lv2', 100)->default('');
            $table->string('lv3', 100)->default('');
            $table->string('lv4', 100)->default('');
            $table->string('lv5', 100)->default('');
            $table->string('weapon', 100)->default('');
            $table->string('body', 100)->default('');
            $table->string('wrist', 100)->default('');
            $table->string('foots', 100)->default('');
            $table->string('neck', 100)->default('');
            $table->string('head', 100)->default('');
            $table->string('shield', 100)->default('');
            $table->string('ear', 100)->default('');
        });

        // Populate the table data
        $data = File::json(database_path('data/item_attr.json'));
        \App\Models\Game\Player\ItemAttr::upsert($data, ['apply']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('item_attr');
    }
};
