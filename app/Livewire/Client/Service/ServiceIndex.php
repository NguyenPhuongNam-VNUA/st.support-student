<?php

namespace App\Livewire\Client\Service;

use Livewire\Component;
use App\Models\Service\Service;
use App\Models\Service\ServiceCategory;
use Livewire\WithPagination;

class ServiceIndex extends Component
{
    use WithPagination;
    
    public $selectedCategories = [];

    public function updatedSelectedCategories()
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