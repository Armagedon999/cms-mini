<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $clientId = auth()->user()->client_id;
    $heroSection = \App\Models\HeroSection::where('client_id', $clientId)->latest()->first();
    return view('dashboard', compact('heroSection'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('herosections', HeroSectionController::class);
    Route::resource('aboutsections', AboutSectionController::class);
    Route::resource('products', ProductController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('footers', FooterController::class);
});

require __DIR__.'/auth.php';
