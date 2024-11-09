<?php

namespace App\Livewire\Client\Service;

use Livewire\Component;
use App\Models\Service\Service;

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
