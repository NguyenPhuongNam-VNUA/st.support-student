<?php

namespace App\Models\Map;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Map\IconPoint;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Point extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon_point_id',
        'description',
        'thumbnail',
        'longitude',
        'latitude'
    ];

    public function iconPoint(): BelongsTo
    {
        return $this->belongsTo(IconPoint::class);
    }


}
