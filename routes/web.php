<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');

Route::get('/about', function () {
    return view('about');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'show'])->name('gallery.show');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'show'])->name('contact.show');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

Route::post('/newsletter', [App\Http\Controllers\NewsletterController::class, 'submit'])->name('newsletter.subscribe');

Route::get('/focus-areas', function () {
    return view('focus-areas');
});

Route::get('/focus-areas/land', function () {
    return view('focus-areas.land');
});

Route::get('/focus-areas/water', function () {
    return view('focus-areas.water');
});

Route::get('/focus-areas/air', function () {
    return view('focus-areas.air');
});

Route::get('/focus-areas/climate', function () {
    return view('focus-areas.climate');
});

Route::get('/events', [App\Http\Controllers\EventsController::class, 'index'])->name('events.show');

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news.show');
Route::get('/news/single-post/{id}', [App\Http\Controllers\NewsController::class, 'get'])->name('news.get');

Route::get('/event/{id}', [App\Http\Controllers\EventsController::class, 'show'])->name('single.event');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
