<?php

declare(strict_types=1);

namespace App\Livewire\Client\Motel;

use App\Models\Dormitory\Motel;
use Livewire\Component;

class MotelDetail extends Component
{
    public $id;

    public $motel;

    public function mount($id): void
    {
        $this->id = $id;
        $this->motel = Motel::findOrFail($id);
        $this->motel = Motel::with('motelGalleries')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.client.motel.motel-detail', [
            'motel' => $this->motel,
        ]);
    }
}
