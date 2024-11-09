<?php

declare(strict_types=1);

namespace App\Livewire\Client\Service;

use App\Models\Service\Service;
use Livewire\Component;

class ServiceDetail extends Component
{
    public $id;
    public $service;

    public function mount($id): void
    {
        $this->id = $id;
        $this->service = Service::findOrFail($id);
        $this->service = Service::with('serviceGalleries')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.client.service.service-detail', [
            'service' => $this->service,
        ]);
    }
}
