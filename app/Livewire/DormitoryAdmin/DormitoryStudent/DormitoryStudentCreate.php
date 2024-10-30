<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\DormitoryStudent;

use App\Enums\StatusRoom;
use App\Models\Dormitory\DormitoryStudent;
use App\Models\Dormitory\Room;
use Livewire\Attributes\Validate;
use Livewire\Component;

class DormitoryStudentCreate extends Component
{
    #[Validate(as: 'Tên sinh viên')]
    public $name;

    #[Validate(as: 'Mã sinh viên')]
    public $code;

    #[Validate(as: 'Giới tính')]
    public $gender;

    #[Validate(as: 'Email')]
    public $email;

    #[Validate(as: 'Số điện thoại')]
    public $phone_number;

    #[Validate(as: 'Ngày sinh')]
    public $bod;

    #[Validate(as: 'Phòng')]
    public $room_id;

    #[Validate(as: 'CCCD')]
    public $citizen_id;

    public $rooms;

    public function mount(): void
    {
        // Lọc phòng có trạng thái còn trống (empty)
        $this->rooms = Room::where('status', StatusRoom::Empty->value)->get();
    }
    public function render()
    {
        //$rooms = Room::all();

        return view('livewire.dormitory-admin.dormitory-student.dormitory-student-create');
    }

    public function store()
    {
        $this->validate();
        DormitoryStudent::create([
            'name' => $this->name,
            'code' => $this->code,
            'gender' => $this->gender,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'bod' => $this->bod,
            'room_id' => $this->room_id,
            'citizen_id' => $this->citizen_id,
        ]);
        session()->flash('success', 'Thêm mới sinh viên thành công');

        return redirect()->route('admin.dormitory-students.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:dormitory_students,email',
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'citizen_id' => [
                'unique:dormitory_students,citizen_id',
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{12}$/", $value)) {
                        return $fail('Căn cước công dân chưa đúng định dạng.');
                    }
                }

            ],
            'code' => 'required|unique:dormitory_students,code',
            'gender' => 'required',
            'bod' => 'required|date',
            'room_id' => 'required',
        ];
    }


}
