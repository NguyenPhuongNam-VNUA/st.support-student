<?php

namespace App\Models\Dormitory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DormitoryStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'gender',
        'citizen_id',
        'bod',
        'email',
        'room_id',
        'phone_number'
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function dormReports(): hasMany
    {
        return $this->hasMany(DormReport::class);
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('code', 'like', '%' . $search . '%');
        }

        return $query;
    }
}
