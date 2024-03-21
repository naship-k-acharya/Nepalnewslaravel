<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\StripeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::delete('/store-profile', [ProfileController::class, 'StoreProfile'])->name('store.profile');
    Route::get('/info', [ProfileController::class, 'detail'])->name('user.detail');
    Route::get('/searching', [SearchController::class, 'search'])->name('dashboard.search');
});
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

require __DIR__.'/auth.php';
Route::get('/addpost', function () {
    return view('addpost');
});
Route::get('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::post('/session', [StripeController::class, 'session'])->name('sessions');
Route::get('/success', [StripeController::class, 'success'])->name('success');

Route::post('/addpost', [PostController::class, 'store'])->name('posts.store');
Route::get('/addpost', [PostController::class, 'showPost']);
Route::get('/addads', function () {
    return view('addads');
});
Route::post('/addadspost', [AdController::class, 'stores'])->name('ads.store');

Route::get('/addads', [AdController::class, 'showads']);
Route::get('/dashboard', [PostController::class, 'countpost']);

Route::get('/samachar', function () {
    return view('samachar');
});
Route::get('/bichar', function () {
    return view('bichar');
});
Route::get('/business', function () {
    return view('business');
});
Route::get('/khelkuid', function () {
    return view('khelkuid');
});
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::delete('/addads/{id}', [AdController::class, 'destroy'])->name('add.destroy');
Route::delete('/info/{id}', [ProfileController::class, 'destroyuser'])->name('user.destroy');
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');











