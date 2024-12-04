<?php

declare(strict_types=1);

namespace App\Livewire\Client\Health;

use App\Models\Health\Doctor as DoctorModel;
use Livewire\Component;

class Doctor extends Component
{
    public function render()
    {
        $doctors = DoctorModel::orderBy('created_at', 'desc')->get();
        return view('livewire.client.health.doctor', ['doctors' => $doctors]);
    }
}
