<?php

declare(strict_types=1);

namespace App\Livewire\Client\Service;

use App\Models\Service\Service;
use App\Models\Service\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceIndex extends Component
{
    use WithPagination;

    public $selectedCategories = [];

    public function updatedSelectedCategories(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Service::query()->orderBy('created_at', 'desc');

        if (!empty($this->selectedCategories)) {
            $query->whereIn('service_category_id', $this->selectedCategories);
        }

        $services = $query->paginate(8);
        $serviceCategories = ServiceCategory::all();

        return view('livewire.client.service.service-index', [
            'services' => $services,
            'serviceCategories' => $serviceCategories
        ]);
    }
}
