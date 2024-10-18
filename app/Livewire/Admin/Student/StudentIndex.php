<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Student;

use App\Models\Student;
use Livewire\Component;

class StudentIndex extends Component
{
    public $search;

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
}
