<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Dormitory;

use App\Models\Dormitory\Dormitory;
use Livewire\Component;

class DormitoryIndex extends Component
{
    public $dormitoryId;
    public $search;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $dormitories = Dormitory::with('manager')
            ->search($this->search)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        foreach ($dormitories as $dormitory) {
            $dormitory->available_rooms = $dormitory->total_rooms - $dormitory->rooms->count();
            $dormitory->save();
        }
        return view('livewire.dormitory-admin.dormitory.dormitory-index', [
            'dormitories' => $dormitories
        ]);
    }


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
