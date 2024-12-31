<?php

namespace App\Models\Enums;

enum CharacterJobEnum: int
{
    case WARRIOR_M = 0;
    case NINJA_F = 1;
    case SURA_M = 2;
    case SHAMAN_F = 3;
    case WARRIOR_F = 4;
    case NINJA_M = 5;
    case SURA_F = 6;
    case SHAMAN_M = 7;

    public function name(): string
    {
        return match($this) {
            self::WARRIOR_M, self::WARRIOR_F => __('app/names.classes.warrior'),
            self::NINJA_M, self::NINJA_F => __('app/names.classes.ninja'),
            self::SURA_M, self::SURA_F => __('app/names.classes.sura'),
            self::SHAMAN_M, self::SHAMAN_F => __('app/names.classes.shaman'),
        };
    }
}
