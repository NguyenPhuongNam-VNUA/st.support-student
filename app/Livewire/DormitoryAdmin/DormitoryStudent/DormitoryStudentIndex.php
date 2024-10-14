<?php

namespace App\Livewire\DormitoryAdmin\DormitoryStudent;

use Livewire\Component;
use App\Models\Dormitory\DormitoryStudent;


class DormitoryStudentIndex extends Component
{
    public $dormitoryStudentId;
    public $search;

    public function render()
    {
        $dormitory_students = DormitoryStudent::query()
        ->search($this->search)
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        return view('livewire.dormitory-admin.dormitory-student.dormitory-student-index', [
            'dormitory_students' => $dormitory_students
        ]);
    }

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];


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
