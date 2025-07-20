<?php
namespace App\Livewire;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/login', function () {
    return redirect()->to(url('/admin'));
})->name('login');

Route::get('/', HomeLivewire::class)->name('home');


Route::get('/foo', function () {
    Artisan::call('storage:link');
});