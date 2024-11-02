<?php

declare(strict_types=1);

namespace App\Livewire\ServiceAdmin\ServiceCategory;

use App\Models\Service\ServiceCategory;
use Livewire\Component;

class ServiceCategoryIndex extends Component
{
    public $serviceCategoryId;
    public $search;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $serviceCategories = ServiceCategory::query()
            ->search($this->search)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.service-admin.service-category.service-category-index', [
            'serviceCategories' => $serviceCategories
        ]);
    }

    public function openDeleteModel($id): void
    {
        $this->serviceCategoryId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        ServiceCategory::destroy($this->serviceCategoryId);
    }
}
