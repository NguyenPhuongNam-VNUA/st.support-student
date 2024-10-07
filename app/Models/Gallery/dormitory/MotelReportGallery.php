<?php

namespace App\Models\Gallery\dormitory;

use App\Models\Dormitory\MotelReport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MotelReportGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'motel_report_id',
        'image',
    ];

    public function motelReport(): belongsTo
    {
        return $this->belongsTo(MotelReport::class);
    }
}
