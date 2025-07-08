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
        return view('frontend.home');
    }

    public function productService(Request $request){
        return view('frontend.product-service');
    }
    
    public function about(Request $request){
        return view('frontend.about');
    }
    
    public function contact(Request $request){
        return view('frontend.contact');
    }
}
