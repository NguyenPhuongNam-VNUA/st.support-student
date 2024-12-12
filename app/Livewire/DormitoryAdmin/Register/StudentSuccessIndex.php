<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Register;

use App\Enums\StatusRequest;
use App\Models\Dormitory\DormitoryRequest;
use App\Models\Dormitory\DormitoryStudent;
use App\Models\Dormitory\Room;
use Carbon\Carbon;
use Livewire\Component;

class StudentSuccessIndex extends Component
{
    public $roomId;
    public $search;

    public $requestId;

    protected $listeners = [
        'changeRoom' => 'updatedRoom',
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $dormitoryRequests = DormitoryRequest::query()
            ->where('status', StatusRequest::Completed->value)
            ->where('is_check', false)
            ->filter($this->roomId)
            ->search($this->search)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        $rooms = Room::with('dormitory')
            ->get()
            ->groupBy('dormitory.name')
            ->toArray();

        return view('livewire.dormitory-admin.register.student-success-index', [
            'dormitoryRequests' => $dormitoryRequests,
            'rooms' => $rooms,
        ]);
    }

    public function save(): void
    {
        $this->validate();
    }

    public function updatedRoom($roomId): void
    {
        $this->roomId = $roomId;
    }

    public function resetFilter(): void
    {
        $this->roomId = '';
        $this->search = '';
        $this->dispatch('resetFilter');
    }

    public function addDormitoryStudent($id)
    {
        $this->requestId = $id;
        $room = DormitoryRequest::query()->where('id', $id)->first()->room;
        $dormitoryRequest = DormitoryRequest::query()->where('id', $id)->first();
        $dormitoryRequest->update([
            'is_check' => true
        ]);

        DormitoryStudent::create([
            'room_id' => $room->id,
            'name' => $dormitoryRequest->name,
            'code' => $dormitoryRequest->code,
            'gender' => $dormitoryRequest->gender,
            'phone_number' => $dormitoryRequest->phone,
            'email' => $dormitoryRequest->code . '@sv.vnua.edu.vn',
            'bod' => $dormitoryRequest->bod,
            'citizen_id' => $dormitoryRequest->citizen_id,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.dormitory.register.student-success')->with('success', 'Thêm sinh viên vào phòng: ' . $room->name . ' thành công');
    }

    public function openDeleteModal($id): void
    {
        $this->requestId = $id;
        $roomName = DormitoryRequest::query()->where('id', $id)->first()->room->name;
        $this->dispatch('openDeleteModal', ['roomName' => $roomName]);
    }

    public function confirmDelete()
    {
        DormitoryRequest::query()->where('id', $this->requestId)->update([
            'status' => StatusRequest::Cancel->value,
            'is_check' => true
        ]);
        $room = DormitoryRequest::query()->where('id', $this->requestId)->first()->room;
        $room->update([
            'available' => $room->available + 1
        ]);
        return redirect()->route('admin.dormitory.register.student-success')->with('success', 'Hủy đăng ký thành công');
    }
}
