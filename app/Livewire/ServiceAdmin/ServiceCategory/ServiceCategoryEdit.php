<?php

declare(strict_types=1);

namespace App\Livewire\ServiceAdmin\ServiceCategory;

use App\Models\Service\ServiceCategory;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ServiceCategoryEdit extends Component
{
    #[Validate(as: 'Tên danh mục dịch vụ')]
    public $name;
    public $id;

    public function render()
    {
        return view('livewire.service-admin.service-category.service-category-edit');
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $serviceCategory = ServiceCategory::query()->find($this->id);
        $this->name = $serviceCategory->name;
    }

    public function update()
    {
        $this->validate();

        ServiceCategory::where('id', $this->id)->update([
            'name' => $this->name,
        ]);

        return redirect()->route('admin.service.service-category.index')->with('success', 'Cập nhật danh mục dịch vụ thành công');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:service_categories,name, ' . $this -> id,
        ];
    }
}
