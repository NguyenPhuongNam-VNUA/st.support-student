<?php

declare(strict_types=1);

namespace App\Models\Dormitory;

use App\Models\Gallery\dormitory\DormReportGallery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DormReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'dormitory_id',
        'student_id',
        'issue_type',
        'description',
        'status',
        'thumbnail',
    ];

    public function dormitory(): BelongsTo
    {
        return $this->belongsTo(Dormitory::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(DormitoryStudent::class);
    }

    public function dormReportGalleries(): HasMany
    {
        return $this->hasMany(DormReportGallery::class);
    }
}
