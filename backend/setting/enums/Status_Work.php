<?php

namespace crudle\app\setting\enums;

class Status_Work
{
    const OnDuty = 'On duty';
    const OffDuty = 'Off duty';

    public static function enums()
    {
        return [
            self::OnDuty => self::OnDuty,
            self::OffDuty => self::OffDuty,
        ];
    }
}