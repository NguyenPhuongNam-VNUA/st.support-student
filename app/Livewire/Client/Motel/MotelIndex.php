<?php

declare(strict_types=1);

namespace App\Livewire\Client\Motel;

use App\Enums\StatusRequest;
use App\Models\Dormitory\Motel;
use Livewire\Component;

class MotelIndex extends Component
{
    public function render()
    {
        $motels = Motel::where('status', StatusRequest::Completed->value)
            ->orderBy('created_at', 'desc')
            ->paginate(8);
        return view('livewire.client.motel.motel-index', [
            'motels' => $motels
        ]);
    }
}
