<?php

namespace App\Livewire\ServiceAdmin\ServiceCategory;

use App\Models\Service\ServiceCategory;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ServiceCategoryCreate extends Component
{
    #[Validate(as: 'Tên danh mục dịch vụ')]
    public $name;

    public function render()
    {
        return view('livewire.service-admin.service-category.service-category-create');
    }

    public function store()
    {
        $this->validate();

        ServiceCategory::create([
            'name' => $this->name,
        ]);

        session()->flash('success', 'Thêm mới danh mục dịch vụ thành công');

        return redirect()->route('admin.service.service-category.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:service_categories',
        ];
    }
}
