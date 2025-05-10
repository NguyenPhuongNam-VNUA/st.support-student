<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Blog;

use App\Models\Post\Post;
use App\Models\Role;
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
    public $category_id;

    protected $listeners = [
        'updateContent' => 'updateContent',
    ];

    public function render()
    {
        $categories = Role::where('name', '!=', 'admin')->get();
        return view('livewire.admin.blog.blog-create', [
            'categories' => $categories,
        ]);
    }

    public function updateContent($value): void
    {
        $this->content = $value;
        $this->validateOnly('content');
    }

    public function store()
    {
        $this->validate();
        if (Auth::user()->role()->where('name', 'admin')->exists()) {
            $this->validate([
                'category_id' => 'required|exists:roles,id',
            ]);
            $categoryId = $this->category_id;
        } else {
            $categoryId = Auth::user()->role_id;
        }

        $this->validate();
        $thumbnailPath = $this->thumbnail->store('thumbnailBlogs', 'public');


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
