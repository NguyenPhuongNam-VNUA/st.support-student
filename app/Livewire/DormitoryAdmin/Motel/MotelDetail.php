<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Motel;

use App\Models\Dormitory\Motel;
use Livewire\Component;

class MotelDetail extends Component
{
    public $id;
    public $motelId;

    public function mount($id): void
    {
        $this->id = $id;
    }

    public function render()
    {
        $motel = Motel::find($this->id);
        return view('livewire.dormitory-admin.motel.motel-detail')->with('motel', $motel);
    }
}
