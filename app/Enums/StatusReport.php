<?php

declare(strict_types=1);

namespace App\Enums;

enum StatusReport: string
{
    case Pending = 'pending';
    case Progress = 'progress';
    case Resolved = 'resolved';

    public function description(): string
    {
        return match ($this) {
            self::Pending => 'Chờ xử lý',
            self::Progress => 'Đang xử lý',
            self::Resolved => 'Đã xử lý',
        };
    }
}
