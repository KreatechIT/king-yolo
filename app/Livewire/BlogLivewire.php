<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;

class BlogLivewire extends Component
{
    use WithPagination;

    public $latestBlog = null;

    public function render()
    {
        // Get the latest blog post
        $this->latestBlog = Blog::latest()->first();

        return view('livewire.blog-livewire', [
            'latestBlog' => $this->latestBlog,
            'blogs' => Blog::where('id', '!=', $this->latestBlog->id)->paginate(3),
        ]);
    }
}