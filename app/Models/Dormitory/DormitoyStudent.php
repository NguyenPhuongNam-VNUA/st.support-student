<?php

namespace App\Models\Dormitory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DormitoyStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'gender',
        'citizen_id',
        'dob',
        'email',
        'room_id',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function dormReports(): hasMany
    {
        return $this->hasMany(DormReport::class);
    }
}
