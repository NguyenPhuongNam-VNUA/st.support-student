<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\DormitoryStudent;

use App\Models\Dormitory\Dormitory;
use App\Models\Dormitory\DormitoryStudent;
use App\Models\Dormitory\Room;
use Livewire\Component;

class DormitoryStudentIndex extends Component
{
    public $dormitoryStudentId;
    public $search;
    public $dormitoryId;
    public $roomId;
    public $rooms = [];
    public $dormitory_name;
    public $room_name;
    public $room_student_id;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
        'changeDormitoryId' => 'updatedDormitoryId',
        'changeRoomId' => 'updatedRoomId',
    ];

    public function render()
    {
        $dormitory_students = DormitoryStudent::query()
            ->search($this->search)
            ->filter($this->dormitoryId, $this->roomId)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        $dormitories = Dormitory::all();
        return view('livewire.dormitory-admin.dormitory-student.dormitory-student-index', [
            'dormitory_students' => $dormitory_students,
            'dormitories' => $dormitories,
            'dormitory_name' => $this->dormitory_name,
            'room_name' => $this->room_name,
        ]);
    }

    public function mount(): void
    {
        if ($this->room_student_id) {
            // Lấy thông tin phòng và tòa nhà từ ID phòng
            $room = Room::find($this->room_student_id);
            if ($room) {
                $this->room_name = $room->name;
                $this->roomId = $room->id;

                $dormitory = $room->dormitory;
                if ($dormitory) {
                    $this->dormitory_name = $dormitory->name;
                }
            }
        }
    }

    public function updatedDormitoryId($value = null): void
    {
        $this->dormitoryId = $value;
        $this->dormitory_name = Dormitory::query()->where('id', $value)->first()->name ?? '';

        $this->roomId = null;
        $this->rooms = Room::query()->where('dormitory_id', $this->dormitoryId)->get();

        if ($this->rooms->isNotEmpty()) {
            $this->dispatch('reloadRoom', rooms: $this->rooms);
        }
    }

    public function updatedRoomId($value = null): void
    {
        $this->roomId = $value;
        $this->room_name = Room::query()->where('id', $value)->first()->name ?? '';
    }

    public function resetFilter(): void
    {
        $this->search = '';
        $this->dormitoryId = null;
        $this->roomId = null;
        $this->dormitory_name = '';
        $this->room_name = '';
        $this->dispatch('resetFilter');
    }

    public function openDeleteModel($id): void
    {
        $this->dormitoryStudentId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        DormitoryStudent::destroy($this->dormitoryStudentId);
    }
}
