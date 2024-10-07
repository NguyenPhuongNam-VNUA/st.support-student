<?php

namespace App\Models\Health;

use App\Models\Gallery\health\HealthIssueGalleries;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HealthIssue extends Model
{
    use HasFactory;

    protected $fillable = [
        'issue_name',
        'doctor_id',
        'thumbnail',
        'symptoms',
        'treatment',
    ];

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function healthIssueGalleries(): hasMany
    {
        return $this->hasMany(HealthIssueGalleries::class);
    }
}
