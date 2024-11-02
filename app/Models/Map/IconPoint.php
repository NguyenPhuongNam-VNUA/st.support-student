<?php

declare(strict_types=1);

namespace App\Models\Map;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IconPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'thumbnail',
    ];

    public function points(): HasMany
    {
        return $this->hasMany(Point::class);
    }
}
