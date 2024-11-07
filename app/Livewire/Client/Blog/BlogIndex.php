<?php

declare(strict_types=1);

namespace App\Livewire\Client\Blog;

use App\Models\Post\Post;
use Livewire\Component;

class BlogIndex extends Component
{
    public function render()
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->paginate(5);
        $recentPosts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('livewire.client.blog.blog-index', ['posts' => $posts, 'recentPosts' => $recentPosts]);
    }
}
