<?php

declare(strict_types=1);

namespace App\Livewire\Client\Account;

use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'refreshProfile' => 'render',
    ];

    public function render()
    {
        return view('livewire.client.account.index', [ 'name' => auth('students')->user()->name]) ?? "";
    }

}
