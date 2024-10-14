<?php

namespace App\Livewire\DormitoryAdmin\DormitoryStudent;

use Livewire\Component;
use App\Models\Dormitory\DormitoryStudent;

class DormitoryStudentDetail extends Component
{
    public $id;

    public function mount($id): void
    {
        $this->id = $id;
    }

    public function render()
    {
        $dormitory_student = DormitoryStudent::find($this->id);
        return view('livewire.dormitory-admin.dormitory-student.dormitory-student-detail')->with('dormitory_student', $dormitory_student);
    }
}
