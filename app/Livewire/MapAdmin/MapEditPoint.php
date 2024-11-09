<?php

declare(strict_types=1);

namespace App\Livewire\MapAdmin;

use App\Models\Map\IconPoint;
use App\Models\Map\Point;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class MapEditPoint extends Component
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

    public $id;

    #[Validate(as: 'Hỉnh ảnh mới')]
    public $newThumbnail;

    public function mount(): void
    {
        $this->id = request()->id;
        $point = Point::query()->find($this->id);
        $this->name = $point->name;
        $this->description = $point->description;
        $this->icon_id = $point->icon_point_id;
        $this->thumbnail = $point->thumbnail;
    }
    public function render()
    {
        $icons = IconPoint::all();
        return view('livewire.map-admin.map-edit-point', ['icons' => $icons]);
    }

    public function update()
    {
        $this->validate();
        $thumbnailPath = $this->thumbnail;

        if ($this->newThumbnail) {
            Storage::disk('public')->delete($this->thumbnail);
            $thumbnailPath = $this->newThumbnail->store('mapPointPhotos', 'public');
        }

        Point::where('id', $this->id)->update([
            'name' => $this->name,
            'description' => $this->description,
            'icon_point_id' => $this->icon_id,
            'thumbnail' => $thumbnailPath,
        ]);

        return redirect()->route('admin.map.index')->with('success', 'Cập nhật thông tin điểm thành công');
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'icon_id' => 'required',
            'newThumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên điểm không được để trống',
            'icon_id.required' => 'Icon không được để trống',
            'newThumbnail.image' => 'Hình ảnh phải là định dạng ảnh',
            'newThumbnail.mimes' => 'Hình ảnh phải là định dạng jpeg, png, jpg',
            'newThumbnail.max' => 'Hình ảnh không được quá 2MB',
        ];
    }

}
