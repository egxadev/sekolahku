<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


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

// Route::redirect('/', '/dashboard-general-dashboard');
Route::get('/', [Landing\HomeController::class, 'index'])->name('landing.home.index');
// POST
Route::get('/post', [Landing\PostController::class, 'index'])->name('landing.post.index');
Route::get('/post/{slug}', [Landing\PostController::class, 'show'])->name('landing.post.show');
// EVENT
Route::get('/event', [Landing\EventController::class, 'index'])->name('landing.event.index');
Route::get('/event/{slug}', [Landing\EventController::class, 'show'])->name('landing.event.show');
// CATEGORY
Route::get('/category/{slug}', [Landing\CategoryController::class, 'show'])->name('landing.category.show');
// PHOTO
Route::get('/photo', [Landing\PhotoController::class, 'index'])->name('landing.photo.index');
// VIDEO
Route::get('/video', [Landing\VideoController::class, 'index'])->name('landing.video.index');
// CONTACT
Route::get('/contact', [Landing\ContactController::class, 'index'])->name('landing.contact.index');


Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function () {

        //dashboard
        Route::get('/dashboard', [Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');

        //permissions
        Route::resource('/permission', Admin\PermissionController::class, ['except' => ['show', 'create', 'edit', 'update', 'delete'], 'as' => 'admin']);

        //roles
        Route::resource('/role', Admin\RoleController::class, ['except' => ['show'], 'as' => 'admin']);

        //users
        Route::resource('/users', Admin\UserController::class, ['except' => ['show'], 'as' => 'admin']);

        //tags
        Route::resource('/tag', Admin\TagController::class, ['except' => 'show', 'as' => 'admin']);

        //categories
        Route::resource('/category', Admin\CategoryController::class, ['except' => 'show', 'as' => 'admin']);

        //posts
        Route::resource('/post', Admin\PostController::class, ['except' => 'show', 'as' => 'admin']);

        //event
        Route::resource('/event', Admin\EventController::class, ['except' => 'show', 'as' => 'admin']);

        //photo
        Route::resource('/photo', Admin\PhotoController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);

        //video
        Route::resource('/video', Admin\VideoController::class, ['except' => 'show', 'as' => 'admin']);

        //slider
        Route::resource('/slider', Admin\SliderController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);
    });
});
