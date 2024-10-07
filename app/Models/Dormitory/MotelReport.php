<?php

namespace App\Models\Dormitory;

use App\Models\Gallery\dormitory\MotelReportGallery;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MotelReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'motel_id',
        'issue_type',
        'description',
        'status',
        'thumbnail',
    ];

    public function student(): belongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function motel(): belongsTo
    {
        return $this->belongsTo(Motel::class);
    }

    public function motelReportGalleries(): hasMany
    {
        return $this->hasMany(MotelReportGallery::class);
    }
}
