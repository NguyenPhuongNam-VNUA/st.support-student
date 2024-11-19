<?php

declare(strict_types=1);

namespace App\Models\Dormitory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Facility extends Model
{
    use HasFactory;

    protected $table = 'dormitory_facilities';

    protected $fillable = [
        'room_id',
        'bed',
        'wardrobe',
        'air_conditioner',
        'area',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function scopeFilter($query, $roomId)
    {
        if ($roomId) {
            return $query->where('room_id', $roomId);
        }
        return $query;
    }
}
