<?php

namespace App\Models\Enums;

enum CharacterClassEnum: int
{
    case WARRIOR = 0;
    case NINJA = 1;
    case SURA = 2;
    case SHAMAN = 3;

    public function name(): string
    {
        return match($this) {
            self::WARRIOR => __('app/names.classes.warrior'),
            self::NINJA => __('app/names.classes.ninja'),
            self::SURA => __('app/names.classes.sura'),
            self::SHAMAN => __('app/names.classes.shaman'),
        };
    }
}
