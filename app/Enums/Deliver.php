<?php

declare(strict_types=1);

namespace App\Enums;

enum Deliver: string
{
    case Yes = 'yes';
    case No = 'no';

    public function description(): string
    {
        return match ($this) {
            self::Yes => 'Có giao hàng',
            self::No => 'Không giao hàng',
        };
    }
}
