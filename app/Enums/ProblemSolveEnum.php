<?php

namespace App\Enums;

enum ProblemSolveEnum: int
{
    case TT_RETURNED = 1;
    case PAID_IN_CASH_DESK = 2;
    case PAID_IN_CASH_DESK_WITH_POLICE = 3;
    case REPORT = 4;
    case OTHER = 5;

    public function label()
    {
        return match ($this) {
            self::TT_RETURNED => 'Товар повернуто на ТТ',
            self::PAID_IN_CASH_DESK => 'Товар оплачений в касу',
            self::PAID_IN_CASH_DESK_WITH_POLICE => 'Товар оплачений в касу при поліції',
            self::REPORT => 'Заява в поліцію',
            default => 'Інше',
        };
    }
}
