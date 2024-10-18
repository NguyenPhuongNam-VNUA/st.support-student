<?php

declare(strict_types=1);

namespace App\Models\Gallery\dormitory;

use App\Models\Dormitory\DormReport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DormReportGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'dorm_report_id',
        'image',
    ];

    public function dormReport(): BelongsTo
    {
        return $this->belongsTo(DormReport::class);
    }
}
