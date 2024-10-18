<?php

declare(strict_types=1);

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'thumbnail',
        'description',
        'phone_number',
        'doctor_role_id',
    ];

    public function doctorRole(): BelongsTo
    {
        return $this->belongsTo(DoctorRole::class);
    }

    public function healthIssues(): HasMany
    {
        return $this->hasMany(HealthIssue::class);
    }

    public function healthRequests(): HasMany
    {
        return $this->hasMany(HealthRequest::class);
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('email', 'like', '%' . $search . '%')
                ->orWhere('name', 'like', '%' . $search . '%')
                ->orWhere('phone_number', 'like', '%' . $search . '%');
        }

        return $query;
    }
}
