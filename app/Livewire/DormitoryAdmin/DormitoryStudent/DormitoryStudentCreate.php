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
    #[Validate(as: 'tên sinh viên')]
    public $name;

    #[Validate(as: 'mã sinh viên')]
    public $code;

    #[Validate(as: 'giới tính')]
    public $gender;

    #[Validate(as: 'email')]
    public $email;

    #[Validate(as: 'số điện thoại')]
    public $phone_number;

    #[Validate(as: 'ngày sinh')]
    public $bod;

    #[Validate(as: 'phòng')]
    public $room_id;

    #[Validate(as: 'căn cước công dân')]
    public $citizen_id;

    public $rooms;

    public function mount(): void
    {
        // Lọc phòng có trạng thái còn trống (empty)
        $this->rooms = Room::with('dormitory')
            ->where('status', StatusRoom::Empty->value)
            ->get()
            ->groupBy('dormitory.name')
            ->toArray();
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
            'room_id' => 'required',
        ];
    }


}
