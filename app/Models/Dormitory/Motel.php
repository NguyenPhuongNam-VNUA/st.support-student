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
        'available_rooms',
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

    public function scopeSearch($query, $search): void
    {
        if ($search) {
            $query->where('owner_name', 'like', '%' . $search . '%');
        }
    }

    public function isNew()
    {
        // Kiểm tra nếu dịch vụ được tạo trong vòng 30 ngày gần đây
        return $this->created_at->greaterThan(now()->subDays(30));
    }

    public function averageRating(): float
    {
        return (float) $this->motelReviews()->avg('rating') ?? 0.0;
    }
}
