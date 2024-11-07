<?php

declare(strict_types=1);

namespace App\Livewire\Client\Blog;

use App\Models\Post\Post;
use Livewire\Component;

class BlogDetail extends Component
{
    public $id;
    public $post;

    public function mount($id): void
    {
        $this->id = $id;
        $this->post = Post::findOrFail($id);
    }

    public function render()
    {
        $recentPosts = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('livewire.client.blog.blog-detail', [
            'post' => $this->post,
            'recentPosts' => $recentPosts
        ]);
    }
}
