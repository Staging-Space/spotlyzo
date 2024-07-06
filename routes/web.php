<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\AccountController as AdminAccountController;
use App\Http\Controllers\Admin\BaseController as AdminBaseController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\FacilityController as AdminFacilityController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\User\PlaceController as UserPlaceController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::prefix('/')->group(function () {
        Route::middleware('guest')->group(function () {
            Route::match(['GET', 'POST'], '/register', [AuthenticationController::class, 'register'])->name('register');
            Route::match(['GET', 'POST'], '/login', [AuthenticationController::class, 'login'])->name('login');
            Route::match(['GET', 'POST'], '/forgot-password', [AuthenticationController::class, 'forgotPassword'])->name('forgot-password');
            Route::match(['GET', 'POST'], '/reset-password', [AuthenticationController::class, 'resetPassword'])->name('reset-password');
        });
        Route::middleware('auth')->group(function () {
            Route::match(['GET', 'POST'], '/logout', [AuthenticationController::class, 'logout'])->name('logout');
        });
        Route::resource('/', BaseController::class)->only(['index']);
        Route::resource('/about', AboutController::class)->only(['index']);
        Route::resource('/categories', CategoryController::class)->only(['index', 'show'])->scoped(['category' => 'slug']);
        Route::resource('/places', PlaceController::class)->only(['show'])->scoped(['place' => 'slug']);
        Route::get('/places/book/{id}', [PlaceController::class, 'book'])->name('places.book');
        Route::get('/places/search', [PlaceController::class, 'search'])->name('places.search');
        Route::resource('/contact', ContactController::class)->only(['index']);
        Route::post('/contact/mail', [ContactController::class, 'mail'])->name('contact.mail');
        Route::post('/newsletter/mail', [NewsletterController::class, 'mail'])->name('newsletter.mail');
    });
    Route::prefix('/user')->name('user.')->group(function () {
        Route::middleware('auth')->group(function () {
            Route::middleware('can:user')->group(function () {
            Route::get('/accounts/profile', [AccountController::class, 'profile'])->name('accounts.profile');
            Route::put('/accounts/update-profile', [ProfileController::class, 'updateProfile'])->name('accounts.update-profile');
            Route::put('/accounts/update-password', [ProfileController::class, 'updatePassword'])->name('accounts.update-password');
            Route::get('/accounts/places', [AccountController::class, 'places'])->name('accounts.places');
            Route::get('/accounts/incoming-bookings', [AccountController::class, 'incomingBookings'])->name('accounts.incoming-bookings');
            Route::get('/accounts/outgoing-bookings', [AccountController::class, 'outgoingBookings'])->name('accounts.outgoing-bookings');
            Route::get('/accounts/transactions', [AccountController::class, 'transactions'])->name('accounts.transactions');
            Route::resource('/places', UserPlaceController::class)->only(['create', 'store', 'edit', 'update', 'delete']);
            });
        });
    });
    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::middleware('auth')->group(function () {
            Route::middleware('can:admin')->group(function () {
                Route::resource('/', AdminBaseController::class)->only(['index']);
                Route::get('/accounts/profile', [AdminAccountController::class, 'profile'])->name('accounts.profile');
                Route::put('/accounts/update-password', [AdminAccountController::class, 'updatePassword'])->name('accounts.update-password');
                Route::resource('/categories', AdminCategoryController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
                Route::resource('/facilities', AdminFacilityController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
            });
        });
    });
});
