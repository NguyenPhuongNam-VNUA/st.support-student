<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Dormitory\AccommodationRequest;
use App\Models\Dormitory\MotelReport;
use App\Models\Health\HealthRequest;
use App\Models\Post\PostReview;
use App\Models\Review\motel\MotelReview;
use App\Models\Review\service\ServiceReview;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'provider_name',
        'email',
        'code',
        'name',
        'phone_number',
        'bod',
        'email_verified',

    ];

    protected $hidden = [
        'code',
        'provider_id',
        'provider_name',
        'password',
    ];

    public function accommodationRequest(): HasOne
    {
        return $this->hasOne(AccommodationRequest::class);
    }

    public function motelReport(): HasMany
    {
        return $this->hasMany(MotelReport::class);
    }

    public function motelReviews(): HasMany
    {
        return $this->hasMany(MotelReview::class);
    }

    public function serviceReviews(): HasMany
    {
        return $this->hasMany(ServiceReview::class);
    }

    public function healthRequests(): HasMany
    {
        return $this->hasMany(HealthRequest::class);
    }

    public function postReviews(): HasMany
    {
        return $this->hasMany(PostReview::class);
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('code', 'like', '%' . $search . '%')
                ->orWhere('name', 'like', '%' . $search . '%');
        }

        return $query;
    }
}
