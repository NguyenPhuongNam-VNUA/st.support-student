<?php

namespace App\Livewire\Admin\Role;
use App\Models\Role;
use Livewire\Component;

class RoleIndex extends Component
{
    public $roleId;
    public $search; 

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $roles = Role::query()
        ->search($this->search)
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        return view('livewire.admin.role.role-index', [
            'roles' => $roles
        ]);
    }

    public function openDeleteModel($id): void
    {
        $this->roleId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        Role::destroy($this->roleId);
    }
}
