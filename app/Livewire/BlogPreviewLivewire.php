<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;

class BlogPreviewLivewire extends Component
{
    public $blog;
    public $relatedBlogs;

    public function mount($slug)
    {   
        $this->blog = Blog::active()->where('slug', $slug)->firstOrFail();
        // Fetch related blogs based on the same category or type
        $this->relatedBlogs = Blog::active()
            ->where('id', '!=', $this->blog->id)
            ->take(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.blog-preview-livewire', [
            'blog' => $this->blog,
            'relatedBlogs' => $this->relatedBlogs,
        ]);
    }
}

