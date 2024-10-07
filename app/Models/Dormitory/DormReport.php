<?php

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

    public function dormitory(): belongsTo
    {
        return $this->belongsTo(Dormitory::class);
    }

    public function student(): belongsTo
    {
        return $this->belongsTo(DormitoyStudent::class);
    }

    public function dormReportGalleries(): hasMany
    {
        return $this->hasMany(DormReportGallery::class);
    }
}
