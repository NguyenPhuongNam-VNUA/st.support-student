<?php

declare(strict_types=1);

namespace App\Livewire\MedicalAdmin\Doctor;

use App\Models\Health\Doctor;
use Livewire\Component;

class DoctorIndex extends Component
{
    public $doctorId;
    public $search;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

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
