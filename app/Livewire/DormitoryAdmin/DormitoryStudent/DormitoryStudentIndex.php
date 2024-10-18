<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\DormitoryStudent;

use App\Models\Dormitory\DormitoryStudent;
use Livewire\Component;

class DormitoryStudentIndex extends Component
{
    public $dormitoryStudentId;
    public $search;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

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
