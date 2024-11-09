<?php

// namespace App\Livewire\Client\Service;

// use Livewire\Component;
// use App\Models\Service\Service;

// class ServiceMore extends Component
// {
//     public function render()
//     {
//         $services = Service::orderBy('created_at', 'desc')
//                           ->take(10)
//                           ->get();
//         return view('livewire.client.service.service-more', ['services' => $services]);
//     }
// }

namespace App\Livewire\Client\Service;

use Livewire\Component;
use App\Models\Service\Service;

class ServiceMore extends Component
{
    public $id; // Thêm property để lưu ID

    // Mount method để nhận ID
    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $services = Service::where('id', '!=', $this->id) // Loại trừ ID hiện tại
                          ->orderBy('created_at', 'desc')
                          ->take(10)
                          ->get();
                          
        return view('livewire.client.service.service-more', [
            'services' => $services
        ]);
    }
}
