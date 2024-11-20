<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Blog;

use App\Models\Post\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogCreate extends Component
{
    use WithFileUploads;

    #[Validate(as: 'Ảnh đại diện bài viết')]
    public $thumbnail;

    #[Validate(as: 'Tiêu đề')]
    public $title;

    #[Validate(as: 'Nội dung bài viết')]
    public $content = '';

    #[Validate(as: 'Danh mục')]
    public $category;

    protected $listeners = [
        'updateContent' => 'updateContent',
    ];

    public function render()
    {
        return view('livewire.admin.blog.blog-create');
    }

    public function updateContent($value): void
    {
        $this->content = $value;
        $this->validateOnly('content');
    }

    public function store()
    {
        $this->validate();
        $thumbnailPath = $this->thumbnail->store('thumbnailBlogs', 'public');
        $categoryId = Auth::user()->role_id;

        $blog = Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'category' => $categoryId,
            'thumbnail' => $thumbnailPath,
            'user_id' => Auth::id(),
            'slug' => Str::slug($this->title),
        ]);

        $blog->update([
            'slug' => Str::slug($this->title) . '-' . $blog->id,
        ]);

        session()->flash('success', 'Thêm mới bài viết thành công');

        return redirect()->route('admin.blogs.index');
    }


    protected function rules()
    {
        return [
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'required|image|max:2048',
        ];
    }
}
