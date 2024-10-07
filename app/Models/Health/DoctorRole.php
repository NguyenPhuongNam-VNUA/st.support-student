<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DoctorRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function doctors(): hasMany
    {
        return $this->hasMany(Doctor::class);
    }
}
