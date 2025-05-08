<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Advice;

use App\Models\Advice;
use Livewire\Component;

class Index extends Component
{
    public $search = '';

    public function render()
    {
        $advices = Advice::query()
            ->where('phone', 'like', '%' . $this->search . '%')
            ->orWhere('content', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->paginate(5);
        return view('livewire.admin.advice.index', [
            'advices' => $advices
        ]);
    }
}
