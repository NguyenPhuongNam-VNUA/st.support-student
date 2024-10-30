<?php

namespace App\Livewire\Admin\Blog;

use App\Models\Post\Post;
use Livewire\Component;

class BlogDetail extends Component
{
    public $id;

    public function mount($id): void
    {
        $this->id = $id;
    }

    public function render()
    {
        $blog = Post::find($this->id);
        return view('livewire.admin.blog.blog-detail')->with('blog', $blog);
    }

}
