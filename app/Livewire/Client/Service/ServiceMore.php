<?php

declare(strict_types=1);

namespace App\Livewire\Client\Service;

use App\Models\Service\Service;
use Livewire\Component;

class ServiceMore extends Component
{
    public $id;

    public function mount($id): void
    {
        $this->id = $id;
    }

    public function render()
    {
        $services = Service::where('id', '!=', $this->id)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return view('livewire.client.service.service-more', [
            'services' => $services
        ]);
    }
}
