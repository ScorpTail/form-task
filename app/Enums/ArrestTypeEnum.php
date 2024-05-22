<?php

namespace App\Enums;

enum ArrestTypeEnum: int
{
    case ONLINE = 1;
    case BY_WINDING = 2;
    case FRP = 3;

    public function label()
    {
        return match ($this) {
            self::ONLINE => 'Онлайн',
            self::BY_WINDING => 'По намотці',
            self::FRP => 'Затримання по намотці з бази FRP',
            default => 'Онлайн',
        };
    }
}
