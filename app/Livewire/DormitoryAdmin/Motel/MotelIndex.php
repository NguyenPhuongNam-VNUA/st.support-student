<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Motel;

use App\Enums\StatusRequest;
use App\Models\Dormitory\Motel;
use Livewire\Component;

class MotelIndex extends Component
{
    public $motelId;
    public $search;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $motels = Motel::query()
            ->search($this->search)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.dormitory-admin.motel.motel-index', [
            'motels' => $motels
        ]);
    }

    public function openDeleteModel($id): void
    {
        $this->motelId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        Motel::destroy($this->motelId);
    }

    public function approveMotel($motelId): void
    {
        $motel = Motel::find($motelId);
        if ($motel) {
            $motel->status = StatusRequest::Completed->value;
            $motel->save();
            session()->flash('message', 'Nhà trọ đã được duyệt thành công.');
        }

    }

    public function cancelMotel($motelId): void
    {
        $motel = Motel::find($motelId);
        if ($motel) {
            $motel->status = StatusRequest::Cancel->value;
            $motel->save();
            session()->flash('message', 'Nhà trọ đã được hủy bỏ.');
        }
    }
}
