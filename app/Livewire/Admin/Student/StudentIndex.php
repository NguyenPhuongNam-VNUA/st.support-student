<?php

namespace App\Livewire\Admin\Student;

use App\Models\Student;
use Livewire\Component;

class StudentIndex extends Component
{
    public function render()
    {
        $students = Student::query()
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        return view('livewire.admin.student.student-index', [
            'students' => $students
        ]);
    }
}
