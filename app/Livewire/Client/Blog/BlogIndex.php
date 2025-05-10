<?php

declare(strict_types=1);

namespace App\Livewire\Client\Blog;

use App\Models\Post\Post;
use App\Models\Role;
use Livewire\Component;

class BlogIndex extends Component
{
    public $selectedCategories = [];
    public $search = '';

    public function render()
    {
        $categories = Role::where('name', '!=', 'admin')->get();

        $query = Post::query();

        $query->where(function ($q): void {
            $q->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('content', 'like', '%' . $this->search . '%')
                ->orWhereHas('user', function ($q2): void {
                    $q2->where('name', 'like', '%' . $this->search . '%');
                });
        });

        if (!empty($this->selectedCategories)) {
            $query->whereIn('category', $this->selectedCategories);
        }

        $posts = $query->orderBy('created_at', 'desc')->paginate(5);
        $recentPosts = Post::orderBy('created_at', 'desc')->take(5)->get();

        return view('livewire.client.blog.blog-index', [
            'posts' => $posts,
            'recentPosts' => $recentPosts,
            'categories' => $categories
        ]);
    }


    public function searchPost(): void
    {
        $this->render();
    }
}
