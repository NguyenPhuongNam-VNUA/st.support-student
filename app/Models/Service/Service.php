<?php

declare(strict_types=1);

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
        'status',
    ];

    public function serviceCategory(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function serviceGalleries(): HasMany
    {
        return $this->hasMany(ServiceGallery::class);
    }

    public function serviceReviews(): HasMany
    {
        return $this->hasMany(ServiceReview::class);
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        return $query;
    }

    public function isNew()
    {
        // Kiểm tra nếu dịch vụ được tạo trong vòng 30 ngày gần đây
        return $this->created_at->greaterThan(now()->subDays(30));
    }


    public function averageRating(): float
    {
        return (float) $this->serviceReviews()->avg('rating') ?? 0.0;
    }
}
