<?php

namespace App\Models\Service;

use App\Models\Gallery\service\ServiceGallery;
use App\Models\Review\service\ServiceReview;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'isShip',
        'slug',
        'phone_number',
        'thumbnail',
        'owner_name',
        'description',
        'service_category_id',
    ];

    public function serviceCategory(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function serviceGalleries(): hasMany
    {
        return $this->hasMany(ServiceGallery::class);
    }

    public function serviceReviews(): hasMany
    {
        return $this->hasMany(ServiceReview::class);
    }
}