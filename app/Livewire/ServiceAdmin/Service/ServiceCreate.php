<?php

declare(strict_types=1);

namespace App\Livewire\ServiceAdmin\Service;

use App\Models\Service\Service;
use App\Models\Service\ServiceCategory;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceCreate extends Component
{
    use WithFileUploads;

    #[Validate(as: 'Tên dịch vụ')]
    public $name;

    #[Validate(as: 'Tên danh mục dịch vụ')]
    public $service_category_id;

    #[Validate(as: 'Mô tả')]
    public $description;

    #[Validate(as: 'Ảnh đại diện dịch vụ')]
    public $thumbnail;

    #[Validate(as: 'Địa chỉ')]
    public $location;

    #[Validate(as: 'Số điện thoại')]
    public $phone_number;

    #[Validate(as: 'Tên chủ dịch vụ')]
    public $owner_name;

    #[Validate(as: 'Giao hàng')]
    public $isShip;

    #[Validate(as: 'Ảnh bổ sung')]
    public $service_galleries = [];


    public function render()
    {
        $service_categories = ServiceCategory::all();
        return view('livewire.service-admin.service.service-create', [
            'service_categories' => $service_categories
        ]);
    }

    public function store()
    {
        $this->validate();
        $thumbnailPath = $this->thumbnail->store('serviceThumbnails', 'public');

        $service = Service::create([
            'name' => $this->name,
            'service_category_id' => $this->service_category_id,
            'description' => $this->description,
            'phone_number' => $this->phone_number,
            'thumbnail' => $thumbnailPath,
            'location' => $this->location,
            'owner_name' => $this->owner_name,
            'isShip' => $this->isShip,
            'slug' => Str::slug($this->name),
        ]);

        if ($this->service_galleries) {
            foreach ($this->service_galleries as $image) {
                $path = $image->store('service_images', 'public');
                $service->serviceGalleries()->create([
                    'image' => $path,
                ]);
            }
        }

        session()->flash('success', 'Thêm mới dịch vụ thành công');

        return redirect()->route('admin.services.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'thumbnail' => 'required|image|max:2048',
            'service_category_id' => 'required',
            'isShip' => 'required',
            'owner_name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'service_galleries.*' => 'image|max:1024',
        ];
    }
}
