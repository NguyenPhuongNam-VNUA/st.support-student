<?php

declare(strict_types=1);

namespace App\Livewire\MedicalAdmin\DoctorRole;

use App\Models\Health\DoctorRole;
use Livewire\Component;

class DoctorRoleIndex extends Component
{
    public $doctor_roleId;
    public $search;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $doctor_roles = DoctorRole::query()
            ->search($this->search)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.medical-admin.doctor-role.doctor-role-index', [
            'doctor_roles' => $doctor_roles
        ]);
    }


    public function openDeleteModel($id): void
    {
        $this->doctor_roleId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        DoctorRole::destroy($this->doctor_roleId);
    }
}
