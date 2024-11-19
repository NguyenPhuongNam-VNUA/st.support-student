<?php

declare(strict_types=1);

namespace App\Models\Dormitory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DormitoryStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'gender',
        'citizen_id',
        'bod',
        'email',
        'room_id',
        'phone_number'
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function dormReports(): HasMany
    {
        return $this->hasMany(DormReport::class);
    }

    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('code', 'like', '%' . $search . '%');
        }

        return $query;
    }

    // app/Models/Student.php

    public function scopeFilter($query, $dormitoryId = null, $roomId = null)
    {
        // Lọc sinh viên theo tòa nhưng không chọn phòng
        if ($dormitoryId && !$roomId) {
            return $query->whereHas('room', function ($q) use ($dormitoryId): void {
                $q->where('dormitory_id', $dormitoryId);
            });
        }

        // Lọc sinh viên theo tòa và phòng cụ thể
        if ($roomId) {
            $query->where('room_id', $roomId);
        }

        // Nếu chỉ chọn phòng (không hợp lệ với cấu trúc bạn mô tả), trả về danh sách rỗng
        return $query;
    }
}
