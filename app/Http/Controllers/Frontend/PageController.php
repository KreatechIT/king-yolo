<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\JobOpening;
use App\Models\NewsLetter;
use App\Models\Settings;
use App\Models\Pages;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {

        $faqs = Faq::sorted()->where('category', 'general')->get();

        $services = [
            [
                'icon' => 'https://placehold.co/600x400/000000/FFFFFF/png',
                'title' => 'Web Design & Development',
                'desc' => 'There is more to your website than being just a platform – it reflects the very core of your brand. At BlackRevo, we do more than just build websites. We also create digital experiences that compel your audiences with streamlined functionality to elevate your brand. ',
            ],
            [
                'icon' => 'https://placehold.co/600x400/000000/FFFFFF/png',
                'title' => 'Rank 1st with Professional Google SEO Service Provider in Malaysia',
                'desc' => 'With BlackRevo, you will be able to see how we redefine what it means to be an online marketing agency ',
            ],
            [
                'icon' => 'https://placehold.co/600x400/000000/FFFFFF/png',
                'title' => 'Search Engine Optimization (SEO)',
                'desc' => 'Search engine optimization has become a necessity in the digital marketing world as one of the most important factors when it comes to growing your business.',
            ],
            [
                'icon' => 'https://placehold.co/600x400/000000/FFFFFF/png',
                'title' => 'Web Design & Development',
                'desc' => 'There is more to your website than being just a platform – it reflects the very core of your brand. At BlackRevo, we do more than just build websites. We also create digital experiences that compel your audiences with streamlined functionality to elevate your brand. ',
            ],
            [
                'icon' => 'https://placehold.co/600x400/000000/FFFFFF/png',
                'title' => 'Rank 1st with Professional Google SEO Service Provider in Malaysia',
                'desc' => 'With BlackRevo, you will be able to see how we redefine what it means to be an online marketing agency ',
            ],
            [
                'icon' => 'https://placehold.co/600x400/000000/FFFFFF/png',
                'title' => 'Search Engine Optimization (SEO)',
                'desc' => 'Search engine optimization has become a necessity in the digital marketing world as one of the most important factors when it comes to growing your business.',
            ]
        ];

        $whyChooseUs = Settings::where('group', 'why-choose-us')->get();

        return view('frontend.home', compact('services', 'faqs', 'whyChooseUs'));
    }

    public function about(Request $request)
    {
        return view('frontend.about');
    }

    public function blog(Request $request)
    {
        $featuredBlogs = Blog::active()->featured()->orderBy('uploaded_date', 'desc')->take(10)->get();
        
        $blogs = Blog::active()->where('is_featured', 0)->orderBy('uploaded_date', 'desc')->paginate(6);

        return view('frontend.blog', compact('blogs','featuredBlogs'));
    }

    public function individualBlog(Request $request, $slug)
    {
        $blog = Blog::active()->where('slug', 'like', $slug)->firstOrFail();
        
        // Get next and previous blogs
        $nextBlog = Blog::active()->where('id', '>', $blog->id)->orderBy('id', 'asc')->first();
        $prevBlog = Blog::active()->where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
        
        // If next blog doesn't exist, get the first blog
        if (!$nextBlog) {
            $nextBlog = Blog::active()->orderBy('id', 'asc')->first();
        }
        
        // If previous blog doesn't exist, get the last blog
        if (!$prevBlog) {
            $prevBlog = Blog::active()->orderBy('id', 'desc')->first();
        }
        
        // Get latest 3 blogs excluding current blog
        $latestBlogs = Blog::active()->where('id', '!=', $blog->id)
                            ->orderBy('created_at', 'desc')
                            ->take(3)
                            ->get();
        
        return view('frontend.individual-blog', compact('blog', 'nextBlog', 'prevBlog', 'latestBlogs'));
    }
    
    public function contact(Request $request)
    {
        return view('frontend.contact');
    }

    public function submitContact(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'name' => 'required|max:255',
            'email' => 'nullable|max:255',
            'phone' => 'required|max:255',
            'subject' => 'nullable',
            'message' => 'required',
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email ?? '',
            'phone' => $request->phone,
            'subject' => $request->subject ?? '',
            'message' => $request->message,
        ]);

        session()->flash('success', 'Your message has been successfully sent! We will get back to you soon.');
        return back();
    }

    public function privacy(Request $request)
    {
        $content = Pages::where('group', 'pages')->where('name', 'privacy-policy')->first();
        return view('frontend.privacy', compact('content'));
    }

    public function terms(Request $request)
    {
        $content = Pages::where('group', 'pages')->where('name', 'terms-conditions')->first();
        return view('frontend.terms', compact('content'));
    }

    public function seo(Request $request)
    {
        $faqs = Faq::sorted()->where('category', 'seo')->get();
        return view('frontend.seo', compact('faqs'));
    }

    public function web(Request $request)
    {
        $faqs = Faq::sorted()->where('category', 'web')->get();
        $cards = [
            ['image' => 'high-performance.png', 'title' => 'High Performance Web Solutions', 'desc' => 'Every aspect of your website is guaranteed to captivate, convert, and scale. Our expertise in performance optimization techniques ensures that your website is 100% SEO-friendly and reliable. The website will ensure seamless navigation, quick load time, speed, reliability, and functionality all compressed into one platform or application.'],
            ['image' => 'quality-work.png', 'title' => 'Quality Work', 'desc' => 'At BlackRevo, we prioritize quality over quantity and excellence is a non-negotiable for all of our projects. Hence, we are constantly in the process of researching and analyzing to find out how we can deliver innovative solutions that provide real value to you.'],
            ['image' => 'creative.png', 'title' => 'Creative and Technical', 'desc' => 'To deliver the best web design and development services to you, we have gone above and beyond in terms of creativity and technicality by finding new ways to harness and implement them into our strategies.'],
            ['image' => 'transparency.png', 'title' => 'Transparency in Project Management Process', 'desc' => 'Our approach in the project management process is built upon layers of trust and communication. We will ensure that you are provided with details of updates on timelines, budgets, payments, and progress throughout the project.'],
            ['image' => 'success-under-one-roof.png', 'title' => 'Your Success Under One Roof', 'desc' => 'Both SEO, web design and development team works in a collaborative and effective manner to provide innovative, customized digital solutions for your business’ needs.'],
        ];
        return view('frontend.web', compact('faqs', 'cards'));
    }

    public function career(Request $request)
    {
        $openings = JobOpening::latest()->get();

        $benifits = [
            [
                'image' => 'voice.png',
                'title' => 'Unleash Your Voice',
                'description' => 'We value your opinions. Speak up, share ideas, and contribute to a culture of open communication. Your voice matters in shaping our success.',
            ],
            [
                'image' => 'table.png',
                'title' => 'Flexible Work Arrangements',
                'description' => 'Work from home once a week for flexibility and improved productivity. Enjoy the convenience of remote work while maintaining work-life balance.',
            ],
            [
                'image' => 'bus.png',
                'title' => 'Commute with Ease',
                'description' => 'Navigate the city hassle-free with public transportation and our transportation allowance, ensuring a smooth and convenient commute for our valued employees.',
            ],
            [
                'image' => 'smart.png',
                'title' => 'Embracing Smart Casual',
                'description' => 'BlackRevo embraces a smart casual dress code for both comfort and style in the workplace. You’re allowed to showcase your personal fashion while maintaining a polished look.',
            ],
            [
                'image' => 'performance.png',
                'title' => 'Performance Rewards',
                'description' => 'We reward excellence! Achieve company targets and unlock exciting rewards, regardless of your department.',
            ],
            [
                'image' => 'snack.png',
                'title' => 'Snack & Sip',
                'description' => 'Work just got more fun with a fully stocked pantry – because who says you can’t enjoy a treat while crushing your goals?',
            ],
        ];
        

        return view('frontend.career', compact('openings', 'benifits'));
    }

    public function submitNewsletter(Request $request){
        $request->validate([
            'email' => 'required|max:255',
        ]);

        $newsletter = NewsLetter::create([
            'email' => $request->email
        ]);

        return back();
    }
}
