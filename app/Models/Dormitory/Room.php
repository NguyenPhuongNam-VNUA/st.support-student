<?php

declare(strict_types=1);

namespace App\Models\Dormitory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'capacity',
        'dormitory_id',
        'student_id',
        'status',
        'slug',
    ];

    public function dormitory(): BelongsTo
    {
        return $this->belongsTo(Dormitory::class);
    }

    public function students(): HasMany
    {
        return $this->hasMany(DormitoryStudent::class);
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        return $query;
    }
}
