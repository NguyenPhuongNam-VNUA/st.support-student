<?php

declare(strict_types=1);

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
        'thumbnail'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function postReviews(): HasMany
    {
        return $this->hasMany(PostReview::class);
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        return $query;
    }
}
