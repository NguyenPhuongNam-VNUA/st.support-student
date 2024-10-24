<?php

declare(strict_types=1);

namespace App\Models\Dormitory;

use App\Models\Gallery\dormitory\MotelGallery;
use App\Models\Review\motel\MotelReview;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Motel extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_name',
        'owner_phoneNumber',
        'address',
        'total_rooms',
        'thumbnail',
        'status',
        'description',
        'slug',
    ];

    public function motelGalleries(): HasMany
    {
        return $this->hasMany(MotelGallery::class);
    }

    public function motelReports(): HasMany
    {
        return $this->hasMany(MotelReport::class);
    }

    public function motelReviews(): HasMany
    {
        return $this->hasMany(MotelReview::class);
    }
}
