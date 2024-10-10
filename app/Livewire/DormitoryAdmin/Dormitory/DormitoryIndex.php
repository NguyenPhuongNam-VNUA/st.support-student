<?php

namespace App\Livewire\DormitoryAdmin\Dormitory;
use App\Models\Dormitory\Dormitory;
use Livewire\Component;

class DormitoryIndex extends Component
{
    public $dormitoryId;
    public $search; 

    public function render()
    {
        $dormitories = Dormitory::with('manager')
        ->search($this->search)
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        return view('livewire.dormitory-admin.dormitory.dormitory-index', [
            'dormitories' => $dormitories
        ]);
    }

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];


    public function openDeleteModel($id): void
    {
        $this->dormitoryId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        Dormitory::destroy($this->dormitoryId);
    }
}
