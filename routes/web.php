<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{slug}', [FrontendController::class, 'projectDetail'])->name('portfolio.show');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'submitInquiry'])->name('contact.submit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Redirect /admin to /dashboard
Route::get('/admin', function () {
    return redirect()->route('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\PortfolioProjectController;
use App\Http\Controllers\InquiryController;

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('services', ServiceController::class)->except(['show']);
    Route::resource('categories', ProjectCategoryController::class)->except(['show']);
    Route::resource('projects', PortfolioProjectController::class)->except(['show']);
    Route::resource('inquiries', InquiryController::class)->only(['index', 'show', 'update', 'destroy']);
});

require __DIR__ . '/auth.php';
