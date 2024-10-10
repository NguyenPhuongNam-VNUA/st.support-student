<?php

namespace App\Livewire\DormitoryAdmin\Manager;

use App\Models\Dormitory\Manager;
use Livewire\Component;

class ManagerIndex extends Component
{
    public $managerId;
    public $search; 

    public function render()
    {
        $managers = Manager::query()
        ->search($this->search)
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        return view('livewire.dormitory-admin.manager.manager-index', [
            'managers' => $managers
        ]);
    }
    

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];


    public function openDeleteModel($id): void
    {
        $this->managerId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        Manager::destroy($this->managerId);
    }
}
