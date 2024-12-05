<?php

declare(strict_types=1);

namespace App\Models\Health;

use App\Models\Gallery\Health\HealthRequestGallery;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HealthRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'issue_description',
        'name',
        'code',
        'phone',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function healthRequestGalleries(): HasMany
    {
        return $this->hasMany(HealthRequestGallery::class, 'health_request_id');
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('code', 'like', '%' . $search . '%');
        }

        return $query;
    }
}
