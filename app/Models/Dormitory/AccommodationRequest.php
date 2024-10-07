<?php

namespace App\Models\Dormitory;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccommodationRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'description',
        'request_status',
    ];

    public function student(): belongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
