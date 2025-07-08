<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/login', function () {
    return redirect()->to(url('/admin'));
})->name('login');


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/individual-blog/{slug}', [PageController::class, 'individualBlog'])->name('individual.blog');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms-conditions', [PageController::class, 'terms'])->name('terms');
Route::get('/seo-malaysia', [PageController::class, 'seo'])->name('seo');
Route::get('/web-design-development', [PageController::class, 'web'])->name('web');
Route::get('/career', [PageController::class, 'career'])->name('career');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [PageController::class, 'submitContact'])->name('submit.contact');
Route::post('/newsletter/submit', [PageController::class, 'submitNewsletter'])->name('submit.newsletter');


Route::get('/foo', function () {
    Artisan::call('storage:link');
});