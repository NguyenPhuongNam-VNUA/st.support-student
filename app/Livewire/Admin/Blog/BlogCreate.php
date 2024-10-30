<?php

namespace App\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Post\Post;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

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

    public function render()
    {
        return view('livewire.admin.blog.blog-create');
    }

    public function updateContent($value)
    {
        $this->content = $value;
        $this->validateOnly('content');
    }

    protected $listeners = [
        'updateContent' => 'updateContent',
    ];

    public function store()
    {
        $this->validate();
        $thumbnailPath = $this->thumbnail->store('thumbnailBlogs', 'public');
        $categoryId = Auth::user()->role_id;

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'category' => $categoryId,
            'thumbnail' => $thumbnailPath,
            'user_id' => Auth::id(),
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
