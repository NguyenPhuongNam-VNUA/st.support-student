<?php

namespace App\Livewire\ServiceAdmin\Service;

use Livewire\Component;
use App\Models\Service\Service;

class ServiceDetail extends Component
{
    public $id;
    public $serviceId;

    public function mount($id): void
    {
        $this->id = $id;
    }

    public function render()
    {
         $service = Service::find($this->id);
        return view('livewire.service-admin.service.service-detail')->with('service', $service);
    }
}
