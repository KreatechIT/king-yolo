@push('title')
    {{ $blog->meta_title ?? '' }}
@endpush
@push('meta_description')
    {{ $blog->meta_description }}
@endpush

<section>
    <div class="premium-gradient">
        <div class="pt-40 pb-16 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="text-center mb-16">
                    <div class="mb-4 text-primary-gold border rounded-full inline-block px-4 py-1 text-sm border-primary-gold font-semibold"
                        data-aos="fade-up">
                        {{ $blog->type }}
                    </div>
                    <h1 class="font-inter text-3xl font-bold text-white mb-6 leading-tight" data-aos="fade-up"
                        data-aos-delay="100">
                        {{ $blog->title }}
                    </h1>
                    <div class="text-md text-gray-400 mb-4">
                        <span>By {{ $blog->author ?? 'Unknown Author' }}</span> |
                        <span>{{ $blog->created_at->format('M d, Y') }}</span>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <div data-aos="fade-right">
                        <img src="{{ asset($blog->image_url) }}" alt="{{ $blog->slug }}"
                            class="rounded-2xl w-full h-auto mb-3">
                    </div>

                    <div class="text-lg text-gray-300">
                        <div class="prose prose-gray max-w-none">
                            {!! str($blog->content)->sanitizeHtml() !!}
                        </div>
                        <style>
                            ul {
                                list-style-type: disc;
                                padding-left: 1.5rem;
                            }

                            ol {
                                list-style-type: decimal;
                                padding-left: 1.5rem;
                            }

                            li {
                                margin-bottom: 0.5rem;
                            }
                        </style>
                    </div>
                </div>


                <div class="mb-20">
                    <h2 class="font-inter text-2xl text-center lg:text-6xl font-bold text-white mb-3 leading-tight"
                        data-aos="fade-up" data-aos-delay="100">
                        Related Insights
                    </h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($relatedBlogs as $relatedBlog)
                            <a href="{{ route('blog.show', $relatedBlog->slug) }}">
                                <div class="rounded-2xl" data-aos="fade-up" data-aos-delay="100"
                                    style="min-height: 400px;">
                                    <div class="rounded-xl flex items-center justify-center mb-6 mx-auto">
                                        <img src="{{ asset($relatedBlog->image_url) }}" alt="{{ $relatedBlog->slug }}"
                                            class="rounded-2xl w-full h-48 object-cover mb-3">
                                    </div>
                                    <h3 class="font-inter text-2xl font-bold text-white mb-4">
                                        {{ Str::limit($relatedBlog->title, 50, '....') }}</h3>
                                    <div class="text-sm text-gray-400 mb-4">
                                        <span>By {{ $relatedBlog->author ?? 'Unknown Author' }}</span> |
                                        <span>{{ $relatedBlog->created_at->format('M d, Y') }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
