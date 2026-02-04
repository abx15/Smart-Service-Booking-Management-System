<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Static Pages Routes
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

use App\Http\Controllers\ServiceController;

// Service Routes
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{category}', [ServiceController::class, 'category'])->name('services.category');
Route::get('/services/{category}/{service}', [ServiceController::class, 'show'])->name('services.show');

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\BookingController;

Route::middleware('auth')->group(function () {
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Worker Routes
Route::middleware(['auth', 'role:worker'])->prefix('worker')->name('worker.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\WorkerController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [\App\Http\Controllers\WorkerController::class, 'profile'])->name('profile');
    Route::patch('/profile', [\App\Http\Controllers\WorkerController::class, 'updateProfile'])->name('profile.update');
    Route::get('/bookings', [\App\Http\Controllers\WorkerController::class, 'bookings'])->name('bookings');
    Route::get('/earnings', [\App\Http\Controllers\WorkerController::class, 'earnings'])->name('earnings');
});

require __DIR__ . '/auth.php';

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\WorkerController as AdminWorkerController;

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::resource('services', AdminServiceController::class);

    Route::get('/bookings', [AdminBookingController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/{booking}', [AdminBookingController::class, 'show'])->name('bookings.show');
    Route::patch('/bookings/{booking}/status', [AdminBookingController::class, 'updateStatus'])->name('bookings.update-status');

    // Worker Routes
    Route::get('/workers', [AdminWorkerController::class, 'index'])->name('workers.index');
    Route::get('/workers/create', [AdminWorkerController::class, 'create'])->name('workers.create');
    Route::post('/workers', [AdminWorkerController::class, 'store'])->name('workers.store');
    Route::get('/workers/{worker}/edit', [AdminWorkerController::class, 'edit'])->name('workers.edit');
    Route::patch('/workers/{worker}', [AdminWorkerController::class, 'update'])->name('workers.update');
    Route::delete('/workers/{worker}', [AdminWorkerController::class, 'destroy'])->name('workers.destroy');
    Route::patch('/workers/{worker}/verify', [AdminWorkerController::class, 'verify'])->name('workers.verify');
    Route::patch('/workers/{worker}/unverify', [AdminWorkerController::class, 'unverify'])->name('workers.unverify');
});
