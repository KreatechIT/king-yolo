<?php
namespace App\Livewire;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/login', function () {
    return redirect()->to(url('/admin'));
})->name('login');

Route::get('/', HomeLivewire::class)->name('home');
Route::get('/about', AboutLivewire::class)->name('about');
Route::get('/kingbot', KingBotLivewire::class)->name('kingbot');
Route::get('/kingmedia', KingMediaLivewire::class)->name('kingmedia');
// Route::get('/kingpay', KingPayLivewire::class)->name('kingpay');
Route::get('/service', ServiceLivewire::class)->name('service');
Route::get('/contact', ContactLivewire::class)->name('contact');


Route::get('/foo', function () {
    Artisan::call('storage:link');
});