<?php

declare(strict_types=1);

namespace App\Enums;

enum StatusRequest: string
{
    case Pending = 'pending';
    case Completed = 'completed';

    case Cancel = 'cancel';

    public function description(): string
    {
        return match ($this) {
            self::Pending => 'Chờ duyệt',
            self::Completed => 'Đã duyệt',
            self::Cancel => 'Đã hủy',
        };
    }
}
