<?php

namespace App\Livewire\MedicalAdmin\Doctor;

use Livewire\Component;
use App\Models\Health\Doctor;

class DoctorIndex extends Component
{
    public $doctorId;
    public $search; 

    public function render()
    {
        $doctors = Doctor::query()
        ->search($this->search)
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        return view('livewire.medical-admin.doctor.doctor-index', [
            'doctors' => $doctors
        ]);
    }

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];


    public function openDeleteModel($id): void
    {
        $this->doctorId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        Doctor::destroy($this->doctorId);
    }
}
