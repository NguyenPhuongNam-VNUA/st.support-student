<?php

declare(strict_types=1);

namespace App\Models\Gallery\service;

use App\Models\Service\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'image',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
