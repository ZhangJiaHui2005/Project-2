<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Pest\ArchPresets\Custom;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::group(['prefix' => 'customer'], function () {
        Route::get('/', [CustomerController::class,'index'])->name('customers.index');
        Route::get('/about', [CustomerController::class, 'about'])->name('customers.about');
        Route::get('/furniture', [CustomerController::class, 'furnitures'])->name('customers.furniture');
        Route::get('/blog', [CustomerController::class, 'blog'])->name('customers.blog');
        Route::get('/contact', [CustomerController::class, 'contact'])->name('customers.contact');
        Route::get('/product/{product}', [CustomerController::class, 'product_details'])->name('customers.product_details');
        Route::post('/product-comment/{product}', [CustomerController::class, 'product_comment'])->name('customers.product_comment');
        Route::get('/delete-comment/{comment}', [CustomerController::class, 'delete_comment'])->name('customers.delete_comment');
    });
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

require __DIR__.'/auth.php';
