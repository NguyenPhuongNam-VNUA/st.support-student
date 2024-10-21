<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\DormitoryStudent;

use App\Enums\StatusRoom;
use App\Models\Dormitory\DormitoryStudent;
use App\Models\Dormitory\Room;
use Livewire\Attributes\Validate;
use Livewire\Component;

class DormitoryStudentEdit extends Component
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

    public $id;

    public function render()
    {
        $rooms = Room::where('status', StatusRoom::Empty->value)->get();
        return view('livewire.dormitory-admin.dormitory-student.dormitory-student-edit', [
            'rooms' => $rooms
        ]);
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $dormitory_student = DormitoryStudent::query()->find($this->id);
        $this->name = $dormitory_student->name;
        $this->code = $dormitory_student->code;
        $this->gender = $dormitory_student->gender;
        $this->email = $dormitory_student->email;
        $this->phone_number = $dormitory_student->phone_number;
        $this->bod = $dormitory_student->bod;
        $this->room_id = $dormitory_student->room_id;
        $this->citizen_id = $dormitory_student->citizen_id;
    }

    public function update()
    {
        $this->validate();

        DormitoryStudent::where('id', $this->id)->update([
            'name' => $this->name,
            'code' => $this->code,
            'gender' => $this->gender,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'bod' => $this->bod,
            'room_id' => $this->room_id,
            'citizen_id' => $this->citizen_id,
        ]);
        return redirect()->route('admin.dormitory-students.index')->with('success', 'Cập nhật thông tin sinh viên thành công');
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:dormitory_students,email,' . $this->id,
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'citizen_id' => [
                'unique:dormitory_students,citizen_id, ' . $this->id,
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{12}$/", $value)) {
                        return $fail('Căn cước công dân chưa đúng định dạng.');
                    }
                }

            ],
            'code' => [
                'required',
                'unique:dormitory_students,code,' . $this->id,
            ],
            'gender' => 'required',
            'bod' => 'required|date',
            'room_id' => 'required',
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Tên sinh viên không được để trống',
            'email.unique' => 'Email đã tồn tại',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'phone_number.required' => 'Số điện thoại không được để trống',
            'code.required' => 'Mã sinh viên không được để trống',
            'code.unique' => 'Mã sinh viên đã tồn tại ',
            'citizen_id.required' => 'Căn cước công dân không được để trống',
            'citizen_id.unique' => 'Căn cước công dân đã tồn tại ',
            'gender.required' => 'Giới tính phải được chọn',
            'bod.required' => 'Ngày sinh không được để trống',
            'room_id.required' => 'Phòng phải được chọn',
            'bod.date' => 'Ngày sinh không hợp lệ',
        ];
    }
}
