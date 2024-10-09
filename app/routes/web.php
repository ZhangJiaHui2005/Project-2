<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Pest\ArchPresets\Custom;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'customer'], function () {
    Route::get('/', [CustomerController::class,'index'])->name('customers.index');
    Route::get('/about', [CustomerController::class, 'about'])->name('customers.about');
    Route::get('/furniture', [CustomerController::class, 'furnitures'])->name('customers.furniture');
    Route::get('/blog', [CustomerController::class, 'blog'])->name('customers.blog');
    Route::get('/contact', [CustomerController::class, 'contact'])->name('customers.contact');
});

require __DIR__.'/auth.php';
