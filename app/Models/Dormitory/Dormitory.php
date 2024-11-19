<?php

declare(strict_types=1);

namespace App\Models\Dormitory;

use App\Enums\StatusRoom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dormitory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'total_rooms',
        'available_rooms',
        'manager_id',
        'description',
        'slug',
    ];

    public function manager(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    public function dormReports(): HasMany
    {
        return $this->hasMany(DormReport::class);
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        return $query;
    }

    public function scopeAvailableRooms($query)
    {
        return $query->whereHas('rooms', function ($query): void {
            $query->where('status', StatusRoom::Empty->value);
        });
    }
}
