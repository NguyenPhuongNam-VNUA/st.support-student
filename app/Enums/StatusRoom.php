<?php

declare(strict_types=1);

namespace App\Enums;

enum StatusRoom: string
{
    case Full = 'full';
    case Empty = 'empty';

    public function description(): string
    {
        return match ($this) {
            self::Full => 'Đầy',
            self::Empty => 'Còn trống',
        };
    }
}
