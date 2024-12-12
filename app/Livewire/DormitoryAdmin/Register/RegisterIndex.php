<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Register;

use App\Enums\StatusRequest;
use App\Mail\CancelRequest;
use App\Mail\CompeletedRequest;
use App\Models\Dormitory\DormitoryRequest;
use App\Models\Dormitory\Room;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class RegisterIndex extends Component
{
    public $roomId;
    public $search;
    #[Validate(as: 'lý do từ chối')]
    public $cancelContent;

    #[Validate(as: 'nội dung')]
    public $completedContent;

    protected $listeners = [
        'changeRoom' => 'updatedRoom',
    ];

    public function render()
    {
        $dormitoryRequests = DormitoryRequest::query()
            ->filter($this->roomId)
            ->search($this->search)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        $rooms = Room::with('dormitory')
            ->get()
            ->groupBy('dormitory.name')
            ->toArray();

        return view('livewire.dormitory-admin.register.register-index', [
            'dormitoryRequests' => $dormitoryRequests,
            'rooms' => $rooms,
        ]);
    }

    public function completedRequest($id)
    {
        $this->validateOnly('completedContent');

        $request = DormitoryRequest::query()->where('id', $id)->first();
        $request->update([
            'status' => StatusRequest::Completed->value,
        ]);

        $room = Room::query()->where('id', $request->room->id)->first();
        $room->update([
            'available' => $room->available - 1,
        ]);

        Mail::to($request->code . '@sv.vnua.edu.vn')->send(new CompeletedRequest($request, $this->completedContent));

        return redirect()->route('admin.dormitory.register.index')
            ->with('success', 'Đã gửi thông báo thành công đến tài khoản ' . $request->code . '@sv.vnua.edu.vn');
    }

    public function cancelRequest($id)
    {
        $this->validateOnly('cancelContent');

        $request = DormitoryRequest::query()->where('id', $id)->first();
        $request->update([
            'status' => StatusRequest::Cancel->value,
        ]);

        Mail::to($request->code . '@sv.vnua.edu.vn')->send(new CancelRequest($request, $this->cancelContent));

        return redirect()->route('admin.dormitory.register.index')
            ->with('success', 'Đã gửi email thông báo từ chối đến tài khoản ' . $request->code . '@sv.vnua.edu.vn');
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

    public function rules()
    {
        return [
            'cancelContent' => 'required',
            'completedContent' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cancelContent.required' => 'Lý do từ chối không được để trống',
            'completedContent.required' => 'Nội dung không được để trống',
        ];
    }
}
