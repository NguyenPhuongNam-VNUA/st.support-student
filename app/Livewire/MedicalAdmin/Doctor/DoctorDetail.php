<?php

declare(strict_types=1);

namespace App\Livewire\MedicalAdmin\Doctor;

use App\Models\Health\Doctor;
use Livewire\Component;

class DoctorDetail extends Component
{
    public $id;

    public function mount($id): void
    {
        $this->id = $id;
    }

    public function render()
    {
        $doctor = Doctor::find($this->id);
        return view('livewire.medical-admin.doctor.doctor-detail')->with('doctor', $doctor);
    }
}
