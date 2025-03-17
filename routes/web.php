<?php

use Livewire\Volt\Volt;
use App\Http\Controllers\post;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FormComponent;
use App\Http\Controllers\KhatEstashanController;
use App\Livewire\TrainStation\Create;

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

//khat estashan part url
Route::get('/khat-estashan/create', Create::class)->name('khat-estashan.create');


require __DIR__ . '/auth.php';
