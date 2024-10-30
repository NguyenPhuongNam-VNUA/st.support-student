<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Post\Post;
use Livewire\Attributes\Validate;
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
    public $category;

    public $id;

    public $new_thumbnail;

    protected $listeners = [
        'updateContent' => 'updateContent',
    ];

    public function render()
    {
        return view('livewire.admin.blog.blog-edit');
    }

    public function updateContent($value)
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


    }

    public function update()
    {
        $this->validate();
        $thumbnailPath = $this->thumbnail;

        if ($this->new_thumbnail) {
            $thumbnailPath = $this->new_thumbnail->store('thumbnailBlogs', 'public');
        }

        Post::where('id', $this->id)->update([
            'title' => $this->title,
            'content' => $this->content,
            'thumbnail' => $thumbnailPath,
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
