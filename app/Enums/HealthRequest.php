<?php

declare(strict_types=1);

namespace App\Enums;

enum HealthRequest: string
{
    case Pending = 'pending';
    case Seen = 'seen';
    case Responded = 'responded';

    public function description(): string
    {
        return match ($this) {
            self::Pending => 'Chờ xử lý',
            self::Seen => 'Đã xem',
            self::Responded => 'Đã phản hồi',
        };
    }
}
