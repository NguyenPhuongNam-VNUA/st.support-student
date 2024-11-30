<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Register;

use App\Enums\StatusRequest;
use App\Models\Dormitory\DormitoryRequest;
use App\Models\Dormitory\Room;
use Livewire\Attributes\Validate;
use Livewire\Component;

class StudentSuccessIndex extends Component
{
    public $roomId;

    #[Validate(as: 'họ và tên')]
    public $name;

    #[Validate(as: 'mã sinh viên')]
    public $code;

    #[Validate(as: 'số điện thoại')]
    public $phone;

    #[Validate(as: 'ngày sinh')]
    public $bod;

    #[Validate(as: 'căn cươc công dân')]
    public $citizen_id;

    protected $listeners = [
        'changeRoom' => 'updatedRoom',
        'openModal' => 'openModal',
        'closeModal' => 'closeModal'
    ];

    public function render()
    {
        $dormitoryRequests = DormitoryRequest::query()
            ->where('status', StatusRequest::Completed->value)
            ->filter($this->roomId)
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

    public function openModal($id): void
    {
        $request = DormitoryRequest::query()->where('id', $id)->first();

        $this->name = $request->name;
        $this->code = $request->code;
        $this->phone = $request->phone;
        $this->bod = $request->bod;
        $this->citizen_id = $request->citizen_id;

        $this->dispatch('openModal', ['id' => $id]);
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
        $this->dispatch('resetFilter');
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'code' => 'required',
            'phone' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'bod' => [
                'required',
                function ($attribute, $value, $fail) {
                    // Chuyển đổi định dạng từ yyyy-mm-dd sang dd/mm/yyyy nếu input là yyyy-mm-dd
                    if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $value)) {
                        $dateParts = explode('-', $value);
                        $value = $dateParts[2] . '/' . $dateParts[1] . '/' . $dateParts[0];
                    }

                    // Kiểm tra định dạng dd/mm/yyyy
                    if (!preg_match("/^\d{2}\/\d{2}\/\d{4}$/", $value)) {
                        return $fail('Ngày sinh phải có định dạng dd/mm/yyyy');
                    }

                    // Giới hạn năm từ 1900 đến năm hiện tại
                    $year = (int) mb_substr($value, 6, 4);
                    if ($year < 1900 || $year > (int) date('Y')) {
                        return $fail('Năm sinh không hợp lệ');
                    }
                }
            ],
            'citizen_id' => 'required',
        ];
    }
}
