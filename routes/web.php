<?php

use Livewire\Volt\Volt;
use App\Http\Controllers\post;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FormComponent;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', FormComponent::class)->name('home');

    Route::get('post/form', [post::class, 'postindex'])->name('post_form');

    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';
