<?php

declare(strict_types=1);

namespace App\Models\Gallery\Health;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HealthRequestGallery extends Model
{
    use HasFactory;

    protected $table = 'health_request_gallary';
    protected $fillable = [
        'health_request_id',
        'image',
    ];

    public function healthRequest(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Health\HealthRequest::class, 'health_request_id');
    }
}
