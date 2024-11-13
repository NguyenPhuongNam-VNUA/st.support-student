<?php

declare(strict_types=1);

namespace App\Livewire\Client\Motel;

use App\Enums\StatusRequest;
use App\Models\Dormitory\Motel;
use Livewire\Component;

class MotelMore extends Component
{
    public $id;

    public function mount($id): void
    {
        $this->id = $id;
    }


    public function render()
    {
        $motels = Motel::where('id', '!=', $this->id)
            ->where('status', StatusRequest::Completed->value)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        return view('livewire.client.motel.motel-more', [
            'motels' => $motels
        ]);
    }
}
