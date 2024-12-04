<?php

declare(strict_types=1);

namespace App\Livewire\Client\Health;

use App\Models\Post\Post;
use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        $posts = Post::where('category', 2)->latest()->get();
        return view('livewire.client.health.blog', [
            'posts' => $posts
        ]);
        return view('livewire.client.health.blog');
    }
}
