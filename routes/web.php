<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlaystoreController;
use App\Http\Controllers\PlaystoreRateController;
use App\Http\Controllers\Category;
use App\Http\Controllers\AddFeedController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\microsoftRateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {

    /// User Profile and Change Password 
    Route::prefix('profile')->group(function () {

        Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');

        Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');

        Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');

        Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');

        Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
    });



    // route for playstore rating and review which is grouped 

    Route::prefix('playstore')->group(function () {

        Route::get('/review', [PlaystoreController::class, 'Review'])->name('review.view');

        Route::get('/search', [PlaystoreRateController::class, 'search'])->name('search');

        Route::get('/rating', [PlaystoreRateController::class, 'Rating'])->name('rating.view');

        Route::get('/feed/add', [AddFeedController::class, 'FeedAdd'])->name('feed.add');

        Route::post('/feed/store', [AddFeedController::class, 'FeedStore'])->name('feed.store');
    });

    //route for Microsoft rating which is grouped

    Route::prefix('microsoft')->group(function () {

        Route::get('/review', [microsoftRateController::class, 'Rating'])->name('msft.rate');
    });
});
