<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/login', function () {
    return redirect()->to(url('/admin'));
})->name('login');


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/product-services', [PageController::class, 'productService'])->name('product.service');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'index'])->name('home');



Route::get('/foo', function () {
    Artisan::call('storage:link');
});