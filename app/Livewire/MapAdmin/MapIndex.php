<?php

declare(strict_types=1);

namespace App\Livewire\MapAdmin;

use App\Models\Map\IconPoint;
use App\Models\Map\Point;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class MapIndex extends Component
{
    //    public $points;
    public $search = '';
    public $pointId;
    public $iconId;

    protected $listeners = [
        'confirmDeletePoint' => 'confirmDeletePoint',
        'confirmDeleteIcon' => 'confirmDeleteIcon',
    ];

    public function render()
    {
        $points = Point::all();
        $points->transform(function ($point) {
            return [
                'id' => $point->id,
                'name' => $point->name,
                'thumbnail' => $point->thumbnail,
                'description' => null !== $point->description ? $point->description : '',
                'longitude' => $point->longitude,
                'latitude' => $point->latitude,
                'icon_name' => $point->iconPoint->name, // Thêm tên của icon vào đây
            ];
        });
        $icons_2 = IconPoint::all('name', 'thumbnail');
        $icons = IconPoint::where('name', 'like', '%' . $this->search . '%')->paginate(3);
        return view('livewire.map-admin.map-index', ['points' => $points,'icons' =>  $icons,'icons_2' => $icons_2]);
    }

    public function openDeleteModelPoint($id): void
    {
        $this->pointId = $id;
        $this->dispatch('openDeleteModelPoint');
    }

    public function confirmDeletePoint(): void
    {
        $thumbnail = Point::find($this->pointId)->thumbnail;
        if ($thumbnail) {
            Storage::disk('public')->delete($thumbnail);
        }
        Point::destroy($this->pointId);
    }

    public function openDeleteModelIcon($id): void
    {
        $this->iconId = $id;
        $this->dispatch('openDeleteModelIcon');
    }

    public function confirmDeleteIcon(): void
    {
        $icon = IconPoint::find($this->iconId);
        if ($icon->points()->exists()) {
            $this->dispatch('errorDeleteIcon');
            return;
        }

        $thumbnail = $icon->thumbnail;
        if ($thumbnail) {
            Storage::disk('public')->delete($thumbnail);
        }
        IconPoint::destroy($this->iconId);
        $this->dispatch('successDeleteIcon');

    }


}
