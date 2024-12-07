<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Student;

use App\Models\Student;
use Livewire\Component;

class StudentIndex extends Component
{
    public $search;
    public $studentId;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $students = Student::query()
            ->search($this->search)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.admin.student.student-index', [
            'students' => $students
        ]);
    }

    public function openDeleteModel($id): void
    {
        $this->studentId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        Student::destroy($this->studentId);
    }
}
