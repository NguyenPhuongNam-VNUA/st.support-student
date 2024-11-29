<?php

declare(strict_types=1);

namespace App\Models\Dormitory;

use App\Enums\StatusRoom;
use App\Models\Gallery\dormitory\RoomGallery;
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
        'thumbnail',
        'description',
    ];

    public function dormitory(): BelongsTo
    {
        return $this->belongsTo(Dormitory::class);
    }

    public function students(): HasMany
    {
        return $this->hasMany(DormitoryStudent::class);
    }

    public function facilities(): HasMany
    {
        return $this->hasMany(Facility::class);
    }

    public function roomGalleries(): HasMany
    {
        return $this->hasMany(RoomGallery::class);
    }

    public function requests(): HasMany
    {
        return $this->hasMany(DormitoryRequest::class);
    }

    //    public function getStatusAttribute(): string
    //    {
    //        if ($this->capacity > $this->students->count()) {
    //            return StatusRoom::Empty->value;
    //        }
    //
    //        return StatusRoom::Full->value;
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
