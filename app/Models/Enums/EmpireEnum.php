<?php

namespace App\Models\Enums;

enum EmpireEnum: int
{
    case SHINSOO = 1;
    case CHUNJO = 2;
    case JINNO = 3;

    public function name(): string
    {
        return match($this) {
            self::SHINSOO => __('app/names.empires.shinsoo'),
            self::CHUNJO => __('app/names.empires.chunjo'),
            self::JINNO => __('app/names.empires.jinno'),
        };
    }

    public function longName(): string
    {
        return match($this) {
            self::SHINSOO => __('app/names.empires.shinsoo.long'),
            self::CHUNJO => __('app/names.empires.chunjo.long'),
            self::JINNO => __('app/names.empires.jinno.long'),
        };
    }
}
