@push('title')
    Explore Latest Insights and News on KingYolo Blog
@endpush
@push('meta_description')
    Stay ahead with the latest insights, news, and trends. Explore expert tips, strategies, and market insights to grow your
    business with KingYolo.
@endpush

<section>
    <div class="premium-gradient">
        <div class="pt-40 pb-16 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="text-center mb-16">
                    <div class="mb-4 text-primary-gold border rounded-full inline-block px-4 py-1 text-sm border-primary-gold font-semibold"
                        data-aos="fade-up">
                        Insights & News
                    </div>
                    <h1 class="font-inter text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight" data-aos="fade-up"
                        data-aos-delay="100">
                        Our Latest Insights
                    </h1>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 sm:gap-10 lg:gap-20 items-center mb-20">
                    @if ($latestBlog)
                        <div class="order-2" data-aos="fade-left">
                            <div
                                class="mb-4 text-primary-gold border border-primary-gold rounded-full inline-block px-4 py-1 text-sm font-semibold">
                                {{ $latestBlog->type }}
                            </div>
                            <a href="{{ route('blog.show', $latestBlog->slug) }}">
                                <h2 class="font-inter text-3xl font-bold text-white mb-2">
                                    {{ $latestBlog->title }}
                                </h2>
                            </a>
                            <div class="text-sm text-gray-400 mb-4">
                                <span>By {{ $latestBlog->author ?? 'Unknown Author' }}</span> |
                                <span>{{ $latestBlog->created_at->format('M d, Y') }}</span>
                            </div>
                            <p class="text-lg text-gray-300 mb-8">
                                {{ Str::limit(strip_tags($latestBlog->heading), 300, '....') }}
                            </p>
                        </div>
                        <div class="order-1" data-aos="fade-right">
                            <a href="{{ route('blog.show', $latestBlog->slug) }}">
                                <img src="{{ asset($latestBlog->image_url) }}" alt="{{ $latestBlog->slug }}"
                                    class="rounded-2xl w-full h-auto mb-3">
                            </a>
                        </div>
                    @endif
                </div>

                <div class="mb-20">
                    <h2 class="font-inter text-2xl text-center lg:text-6xl font-bold text-white mb-3 leading-tight"
                        data-aos="fade-up" data-aos-delay="100">
                        Other Insights
                    </h2>
                    @if ($blogs->count() > 0)
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                            @foreach ($blogs as $blog)
                                <a href="{{ route('blog.show', $blog->slug) }}">
                                    <div class="rounded-2xl" data-aos="fade-up" data-aos-delay="100"
                                        style="min-height: 400px;">
                                        <div class="rounded-xl flex items-center justify-center mb-6 mx-auto">
                                            <img src="{{ asset($blog->image_url) }}" alt="{{ $blog->slug }}"
                                                class="rounded-2xl w-full h-48 object-cover mb-3">
                                        </div>
                                        <h3 class="font-inter text-2xl font-bold text-white mb-4">
                                            {{ Str::limit($blog->title, 50, '....') }}</h3>
                                        <div class="text-sm text-gray-400 mb-4">
                                            <span>By {{ $blog->author ?? 'Unknown Author' }}</span> |
                                            <span>{{ $blog->created_at->format('M d, Y') }}</span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                        {{ $blogs->links() }}
                    @else
                        <div class="text-center">
                            No blogs available at the moment.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
