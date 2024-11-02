<?php

namespace App\Livewire\ServiceAdmin\Service;

use Livewire\Component;
use App\Models\Service\Service;
use App\Models\Service\ServiceCategory;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class ServiceEdit extends Component
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

    public $id;

    public $new_thumbnail;

    public $service_galleries = [];
    public $new_service_galleries = [];

    public function render()
    {
        $service_categories = ServiceCategory::all();
        return view('livewire.service-admin.service.service-edit',  [
            'service_categories' => $service_categories
        ]);
    }

    public function mount(): void
    {
        $this->id = request()->id;
        // $service = Service::query()->find($this->id);
        $service = Service::with('serviceGalleries')->find($this->id);

        $this->name = $service->name;
        $this->service_category_id = $service->service_category_id;
        $this->description = $service->description;
        $this->thumbnail = $service->thumbnail;
        $this->location = $service->location;
        $this->phone_number = $service->phone_number;
        $this->owner_name = $service->owner_name;
        $this->isShip = $service->isShip;

        $this->service_galleries = $service->serviceGalleries;

    }

    public function update()
    {
        $this->validate();
    
        $thumbnailPath = $this->thumbnail;
    
        if ($this->new_thumbnail) {
            $thumbnailPath = $this->new_thumbnail->store('serviceThumbnails', 'public');
        }
            $service = Service::find($this->id);
        $service->update([
            'name' => $this->name,
            'service_category_id' => $this->service_category_id,
            'description' => $this->description,
            'thumbnail' => $thumbnailPath,
            'location' => $this->location,
            'phone_number' => $this->phone_number,
            'owner_name' => $this->owner_name,
            'isShip' => $this->isShip,
        ]);
            if ($this->new_service_galleries) {
            foreach ($this->new_service_galleries as $image) {
                $path = $image->store('service_images', 'public');
                $service->serviceGalleries()->create([
                    'image' => $path,
                ]);
            }
        }
        return redirect()->route('admin.services.index')->with('success', 'Cập nhật thông tin dịch vụ thành công');
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
            'new_thumbnail' => 'nullable|image|max:2048',
            'service_category_id' => 'required',
            'isShip' => 'required',
            'owner_name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'new_service_galleries' => 'nullable|array',
            'new_service_galleries.*' => 'image|max:2048',

        ];
    }
}
