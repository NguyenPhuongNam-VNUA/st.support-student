<?php

declare(strict_types=1);

namespace App\Livewire\MapAdmin;

use App\Models\Map\IconPoint;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class MapIconCreate extends Component
{
    use WithFileUploads;

    #[Validate(as: 'Tên icon')]
    public $name;

    #[Validate(as: 'Ảnh icon')]
    public $thumbnail;

    public $isValidThumbnail = false;

    public function render()
    {
        return view('livewire.map-admin.map-icon-create');
    }

    public function store()
    {
        $this->validate();

        // Kiểm tra xem $thumbnail có tệp tải lên không
        if ($this->thumbnail) {
            $thumbnailPath = $this->thumbnail->store('mapIconPointPhotos', 'public');

            IconPoint::create([
                'name' => $this->name,
                'thumbnail' => $thumbnailPath,
            ]);

            session()->flash('success', 'Thêm mới icon thành công');
            return redirect()->route('admin.map.index');
        }

        session()->flash('error', 'Vui lòng tải lên một ảnh hợp lệ');
    }

    protected function rules()
    {
        return [
            'name' => 'required|regex:/^[a-zA-Z]+$/',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=32,height=32',
        ];

    }

    protected function messages()
    {
        return [
            'name.required' => 'Tên icon không được để trống',
            'name.regex' => 'Tên icon phải viết liền không dấu',
            'thumbnail.required' => 'Ảnh hồ sơ không được để trống',
            'thumbnail.image' => 'Ảnh hồ sơ phải là định dạng ảnh',
            'thumbnail.mimes' => 'Ảnh hồ sơ phải có định dạng jpeg, png, jpg',
            'thumbnail.max' => 'Ảnh hồ sơ không được quá 2MB',
            'thumbnail.dimensions' => 'Ảnh icon phải có kích thước 32 x 32px',
        ];
    }
}
