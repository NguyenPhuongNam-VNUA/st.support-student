<?php

declare(strict_types=1);

namespace App\Models\Dormitory;

use App\Models\Gallery\dormitory\RoomGallery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'thumbnail',
        'description',
        'available',
    ];

    public function dormitory(): BelongsTo
    {
        return $this->belongsTo(Dormitory::class);
    }

    public function students(): HasMany
    {
        return $this->hasMany(DormitoryStudent::class);
    }

    public function facility(): HasOne
    {
        return $this->hasOne(Facility::class);
    }

    public function roomGalleries(): HasMany
    {
        return $this->hasMany(RoomGallery::class);
    }

    public function requests(): HasMany
    {
        return $this->hasMany(DormitoryRequest::class);
    }

    //    public function getAvailableAttribute(): int
    //    {
    //        return  $this->capacity - $this->students->count();
    //    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        return $query;
    }

    public function scopeFilter($query, $dormitoryId)
    {
        if ($dormitoryId) {
            return $query->where('dormitory_id', $dormitoryId);
        }
    }

    public function scopeEmpty($query, $value)
    {
        if ($value) {
            return $query->where('status', $value);
        }
    }
}
