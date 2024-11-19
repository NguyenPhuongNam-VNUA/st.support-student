<?php

declare(strict_types=1);

namespace App\Models\Gallery\dormitory;

use App\Models\Dormitory\Room;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomGallery extends Model
{
    use HasFactory;

    protected $table = 'room_gallery';

    protected $fillable = [
        'room_id',
        'image',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
