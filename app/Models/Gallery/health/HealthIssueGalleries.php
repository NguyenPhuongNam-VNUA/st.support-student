<?php

namespace App\Models\Gallery\health;

use App\Models\Health\HealthIssue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HealthIssueGalleries extends Model
{
    use HasFactory;

    protected $fillable = [
        'health_issue_id',
        'image',
    ];

    public function healthIssue(): belongsTo
    {
        return $this->belongsTo(HealthIssue::class);
    }
}
