<?php

declare(strict_types=1);

namespace App\Livewire\Client\Service;

use App\Enums\StatusRequest;
use App\Models\Service\Service;
use App\Models\Service\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceIndex extends Component
{
    use WithPagination;

    public $selectedCategories = [];

    public $search = '';

    public function updatedSelectedCategories(): void
    {
        $this->resetPage();
    }

    public function searchPost(): void
    {
        $this->resetPage(); // quay về trang 1 nếu đang ở trang 2, 3,...
    }


    public function render()
    {
        $query = Service::where('status', StatusRequest::Completed->value)
            ->orderBy('created_at', 'desc');

        if (!empty($this->selectedCategories)) {
            $query->whereIn('service_category_id', $this->selectedCategories);
        }

        if (!empty($this->search)) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        $services = $query->paginate(8);
        $serviceCategories = ServiceCategory::with('services')->get();

        return view('livewire.client.service.service-index', [
            'services' => $services,
            'serviceCategories' => $serviceCategories,
        ]);
    }
}
