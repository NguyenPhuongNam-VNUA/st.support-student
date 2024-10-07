<?php

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

    public function motelGalleries(): hasMany
    {
        return $this->hasMany(MotelGallery::class);
    }

    public function motelReports(): hasMany
    {
        return $this->hasMany(MotelReport::class);
    }

    public function motelReviews(): hasMany
    {
        return $this->hasMany(MotelReview::class);
    }
}
