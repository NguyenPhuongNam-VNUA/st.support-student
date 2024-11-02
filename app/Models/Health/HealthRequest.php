<?php

declare(strict_types=1);

namespace App\Models\Health;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HealthRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'doctor_id',
        'status',
        'issue_description',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
