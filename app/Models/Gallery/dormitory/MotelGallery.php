<?php

declare(strict_types=1);

namespace App\Models\Gallery\dormitory;

use App\Models\Dormitory\Motel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MotelGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'motel_id',
        'image',
    ];

    public function motel(): BelongsTo
    {
        return $this->belongsTo(Motel::class);
    }
}
