<?php

declare(strict_types=1);

namespace App\Models\Dormitory;

use App\Enums\Gender;
use App\Enums\StatusRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DormitoryRequest extends Model
{
    use HasFactory;

    protected $table = 'dormitory_request';

    protected $fillable = [
        'room_id',
        'name',
        'code',
        'phone',
        'bod',
        'note',
        'status',
        'gender',
        'citizen_id',
        'created_at',
        'is_check',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function scopeFilter($query, $roomId)
    {
        if ($roomId) {
            return $query->where('room_id', $roomId);
        }
        return $query;
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('code', 'like', '%' . $search . '%');
        }

        return $query;
    }

    public function getGenderTextAttribute()
    {
        return match($this->gender) {
            Gender::Male->value => '<span class="badge bg-primary bg-opacity-20 text-primary"><i class="ph-gender-male me-2"></i>Nam</span>',
            Gender::Female->value => '<span class="badge bg-pink bg-opacity-20 text-pink"><i class="ph-gender-female me-2"></i>Nữ</span>',
        };
    }

    public function getStatusTextAttribute()
    {
        return match($this->status) {
            StatusRequest::Pending->value => '<span class="badge bg-warning bg-opacity-20 text-warning"><i class="ph-check-circle me-2"></i>Chờ xác nhận</span>',
            StatusRequest::Completed->value => '<span class="badge bg-success bg-opacity-20 text-success"><i class="ph-check-circle me-2"></i>Đã xác nhận</span>',
            StatusRequest::Cancel->value => '<span class="badge bg-danger bg-opacity-20 text-danger"><i class="ph-check-circle me-2"></i>Đã từ chối</span>',
        };
    }
}
