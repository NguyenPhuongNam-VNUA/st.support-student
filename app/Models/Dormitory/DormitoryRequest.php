<?php

declare(strict_types=1);

namespace App\Models\Dormitory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryRequest extends Model
{
    use HasFactory;

    protected $table = 'dormitory_request';

    protected $fillable = [
        'room_id',
        'name',
        'code',
        'phone',
        'bod',
        'note',
        'status',
        'gender',
        'created_at',
    ];
}
