<?php

namespace App\Enums;

enum AdultTypeEnum: int
{
    case ADULT = 1;
    case ADOLESCENT = 2;

    public function label()
    {
        return match ($this) {
            self::ADULT => 'Повнолітній',
            self::ADOLESCENT => 'Не повнолітній',
            default => 'Повнолітній',
        };
    }
}
