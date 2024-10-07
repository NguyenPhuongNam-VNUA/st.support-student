<?php

declare(strict_types=1);

namespace App\Enums;

enum Gender: string
{
    case Male = 'male';
    case Female = 'female';

    public function description(): string
    {
        return match ($this) {
            self::Male => 'Nam',
            self::Female => 'Nữ',
        };
    }
}
