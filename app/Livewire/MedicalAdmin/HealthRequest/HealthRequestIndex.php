<?php

declare(strict_types=1);

namespace App\Livewire\MedicalAdmin\HealthRequest;

use App\Models\Health\HealthRequest;
use Livewire\Component;

class HealthRequestIndex extends Component
{
    public $health_requestId;
    public $search;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $health_requests = HealthRequest::query()
            ->search($this->search)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.medical-admin.health-request.health-request-index', [
            'health_requests' => $health_requests
        ]);
    }

    public function openDeleteModel($id): void
    {
        $this->health_requestId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        HealthRequest::destroy($this->health_requestId);
    }

    public function respondedRequest($health_requestId): void
    {
        $health_request = HealthRequest::find($health_requestId);
        if ($health_request) {
            $health_request->status = \App\Enums\HealthRequest::Responded->value;
            $health_request->save();
        }
    }

    public function markAsSeen($health_requestId)
    {
        $health_request = HealthRequest::find($health_requestId);
        if ($health_request) {
            if ($health_request->status === \App\Enums\HealthRequest::Pending->value) {
                $health_request->status = \App\Enums\HealthRequest::Seen->value;
                $health_request->save();
            }
        }

        return redirect()->route('admin.medical.healthRequest.detail', ['id' => $health_requestId]);
    }
}
