<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Blog;

use App\Models\Post\Post;
use Livewire\Component;

class BlogIndex extends Component
{
    public $blogId;
    public $search;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $userRoleId = auth()->user()->role->id;
        $blogs = Post::query()
            ->whereHas('user.role', function ($query) use ($userRoleId): void {
                $query->where('id', $userRoleId);
            })
            ->search($this->search)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.admin.blog.blog-index', [
            'blogs' => $blogs
        ]);
    }

    public function openDeleteModel($id): void
    {
        $this->blogId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        Post::destroy($this->blogId);
    }
}
