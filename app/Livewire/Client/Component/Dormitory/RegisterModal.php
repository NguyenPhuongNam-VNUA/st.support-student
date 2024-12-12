<?php

declare(strict_types=1);

namespace App\Livewire\Client\Component\Dormitory;

use App\Enums\StatusRequest;
use App\Models\Dormitory\DormitoryRequest;
use App\Models\Dormitory\Room;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegisterModal extends Component
{
    public $roomId;
    public $roomName;

    #[Validate(as: 'họ tên')]
    public $name;

    #[Validate(as: 'mã sinh viên')]
    public $code;

    #[Validate(as: 'số điện thoại')]
    public $phone;

    #[Validate(as: 'ngày sinh')]
    public $bod;
    public $note;
    public $status;

    #[Validate(as: 'giới tính')]
    public $gender;

    #[Validate(as: 'căn cước công dân')]
    public $citizen_id;

    protected $listeners = [
        'showRegisterModal' => 'showRegisterModal',
    ];

    public function render()
    {
        return view('livewire.client.component.dormitory.register-modal');
    }

    public function showRegisterModal($roomId): void
    {
        $this->roomId = $roomId;
        $this->roomName = Room::find($roomId)->name;
    }

    public function mount(): void
    {
        if (auth('students')->check()) {
            $student = auth('students')->user();
            $this->name = $student->name;
            $this->code = $student->code;
            $this->phone = $student->phone_number;
            $this->bod = $student->bod;
        }
    }

    public function registerDorm(): void
    {

        $this->validate();

        DormitoryRequest::create([
            'room_id' => $this->roomId,
            'name' => $this->name,
            'code' => $this->code,
            'phone' => $this->phone,
            'bod' => $this->bod,
            'note' => $this->note,
            'gender' => $this->gender,
            'status' => StatusRequest::Pending->value,
            'citizen_id' => $this->citizen_id,
            'created_at' => now(),
        ]);

        $this->reset();
        $this->dispatch('registration-success');
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
            'gender' => 'required',
            'citizen_id' => 'required',
        ];
    }
}
