<?php

declare(strict_types=1);

namespace App\Models\Review\motel;

use App\Models\Dormitory\Motel;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MotelReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'motel_id',
        'student_id',
        'rating',
        'comment',
    ];

    public function motel(): BelongsTo
    {
        return $this->belongsTo(Motel::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
