<?php

declare(strict_types=1);

namespace App\Livewire\ServiceAdmin\Service;

use App\Models\Service\Service;
use Livewire\Component;

class ServiceIndex extends Component
{
    public $serviceId;
    public $search;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $services = Service::query()
            ->search($this->search)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.service-admin.service.service-index', [
            'services' => $services
        ]);
    }

    public function openDeleteModel($id): void
    {
        $this->serviceId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        Service::destroy($this->serviceId);
    }
}
