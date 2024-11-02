<?php

namespace App\Livewire\MapAdmin;

use App\Models\Map\Point;
use http\Env\Request;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Map\IconPoint;
use Livewire\WithFileUploads;

class MapCreatePoint extends Component
{
    use WithFileUploads;

    #[Validate(as: 'Tên điểm')]
    public $name;

    #[Validate(as: 'Mô tả')]
    public $description;

    #[Validate(as: 'Icon_id')]
    public $icon_id;

    #[Validate(as: 'Hỉnh ảnh')]
    public $thumbnail;

    public $lat;
    public $lng;

    public function mount()
    {
        $this->lat= request()->query('lat');
        $this->lng= request()->query('lng');
    }

    public function store()
    {
        $this->validate();
        $thumbnailPath=null;
        if($this->thumbnail){
            $thumbnailPath = $this->thumbnail->store('mapPointPhotos', 'public');
        }
        Point::create([
            'name' => $this->name,
            'description' => $this->description,
            'icon_point_id' => $this->icon_id,
           'thumbnail' => $thumbnailPath,
            'latitude' => $this->lat,
            'longitude' => $this->lng,
        ]);
        session()->flash('success', 'Thêm mới icon thành công');
        return redirect()->route('admin.map.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'icon_id' => 'required',
            'thumbnail' => 'nullable|image|max:2048',
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Tên điểm không được để trống',
            'icon_id.required' => 'Icon không được để trống',
            'thumbnail.image' => 'Hình ảnh phải là định dạng ảnh',
            'thumbnail.max' => 'Hình ảnh không được quá 2MB',
        ];
    }

    public function render()
    {
        $icons = IconPoint::all('name', 'id');
        return view('livewire.map-admin.map-create-point', compact('icons'));
    }
}
