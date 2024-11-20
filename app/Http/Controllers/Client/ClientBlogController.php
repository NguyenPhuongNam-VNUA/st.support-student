<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post\Post;

class ClientBlogController extends Controller
{
    public function index()
    {
        return view('client.pages.blog.index');
    }

    public function detail($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('client.pages.blog.detail', [
            'id' => $post->id,
            'post' => $post,
        ]);
    }
}
