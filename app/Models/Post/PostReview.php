<?php

namespace App\Models\Post;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'student_id',
        'rating',
        'comment',
    ];

    public function post(): belongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function student(): belongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
