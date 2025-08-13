<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Blog extends Model
{
    protected $fillable = [
        'title',
        'type',
        'slug',
        'image',
        'content',
        'author',
        'is_featured',
        'meta_description',
        'meta_title',
        'status',
        'heading'
    ];

     protected $casts = [
        'is_featured' => 'boolean',
        'status' => 'boolean',
    ];

    public function getImageUrlAttribute()
    {
        return $this->image
            ? ('images/' . $this->image)
            : null;
    }

    public function scopeFeatured($query)
    {
        $query->where('is_featured', 1);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
          
            // Auto-generate slug from title if it's not provided
            if (empty($blog->slug)) {
                $slug = Str::slug($blog->title);
                $blog->slug = $slug;  
            }
        });

        static::updating(function ($blog) {
            if ($blog->isDirty('title')) {
                $slug = Str::slug($blog->title);
                $blog->slug = $slug;  
            }
        });
    }

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }
}
