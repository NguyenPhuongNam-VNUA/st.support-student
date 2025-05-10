<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Blog;

use App\Models\Post\Post;
use App\Models\Role;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogEdit extends Component
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

    public $id;

    public $new_thumbnail;

    protected $listeners = [
        'updateContent' => 'updateContent',
    ];

    public function render()
    {
        $categories = Role::where('name', '!=', 'admin')->get();
        return view('livewire.admin.blog.blog-edit', [
            'categories' => $categories
        ]);
    }

    public function updateContent($value): void
    {
        $this->content = $value;
        $this->validateOnly('content');
    }



    public function mount(): void
    {
        $this->id = request()->id;
        $blog = Post::query()->find($this->id);
        $this->title = $blog->title;
        $this->thumbnail = $blog->thumbnail;
        $this->content = $blog->content;
        $this->category_id = $blog->category;
    }

    public function update()
    {
        $this->validate();
        if (auth()->user()->role()->where('name', 'admin')->exists()) {
            $this->validate([
                'category_id' => 'required|exists:roles,id',
            ]);
            $categoryId = $this->category_id;
        } else {
            $categoryId = auth()->user()->role_id;
        }
        $thumbnailPath = $this->thumbnail;

        if ($this->new_thumbnail) {
            $thumbnailPath = $this->new_thumbnail->store('thumbnailBlogs', 'public');
        }

        Post::where('id', $this->id)->update([
            'title' => $this->title,
            'content' => $this->content,
            'thumbnail' => $thumbnailPath,
            'category' => $categoryId,
            'slug' => Str::slug($this->title) . '-' . $this->id,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Cập nhật thông tin bài viết thành công');
    }

    protected function rules()
    {
        return [
            'title' => 'required',
            'content' => 'required',
            'new_thumbnail' => 'nullable|image|max:2048',
        ];
    }
}
