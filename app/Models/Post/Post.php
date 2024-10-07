<?php

namespace App\Models\Post;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'category',
    ];

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function postReviews(): hasMany
    {
        return $this->hasMany(PostReview::class);
    }
}
