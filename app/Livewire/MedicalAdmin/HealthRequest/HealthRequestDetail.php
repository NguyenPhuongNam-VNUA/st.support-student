<?php

declare(strict_types=1);

namespace App\Livewire\MedicalAdmin\HealthRequest;

use App\Models\Health\HealthRequest;
use Livewire\Component;

class HealthRequestDetail extends Component
{
    public $id;

    public function mount($id): void
    {
        $this->id = $id;
    }

    public function render()
    {
        $healthRequest = HealthRequest::find($this->id);
        return view('livewire.medical-admin.health-request.health-request-detail')->with('healthRequest', $healthRequest);
    }
}
