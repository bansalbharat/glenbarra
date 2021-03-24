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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function(){return view('admin.dashboard.dashboard');})->name('admin.dashboard');
Auth::routes();


// About Menu Routes Starts Here

Route::get('/about/add/', function(){return view('admin.about.add');})->name('admin.about.add');

Route::get('/about/view/', function(){return view('admin.about.view');})->name('admin.about.view');

// About Menu Routes Ends Here



// Event Menu Routes Starts Here

Route::get('/event/add', function(){return view('admin.event-exhibition.add');})->name('admin.event.add');

Route::get('/event/view', function(){return view('admin.event-exhibition.view');})->name('admin.event.view');

Route::get('/event/order', function(){return view('admin.event-exhibition.displayOrder');})->name('admin.event.displayorder');

// Event Menu Routes Ends Here




// Gallery Routes Starts Here

Route::get('/gallery/add', function(){return view('admin.gallery.add');})->name('admin.gallery.add');

Route::get('/gallery/view', function(){return view('admin.gallery.view');})->name('admin.gallery.view');

Route::get('/gallery/order', function(){return view('admin.gallery.displayOrder');})->name('admin.gallery.displayorder');

Route::get('/gallery/theme', function(){return view('admin.gallery.theme');})->name('admin.gallery.theme');

// Gallery Menu Routes Ends Here



// Press Menu Routes Starts Here

Route::get('/press/add', function(){return view('admin.press.add');})->name('admin.press.add');

Route::get('/press/view', function(){return view('admin.press.view');})->name('admin.press.view');

// Press Menu Routes Ends Here





// Publication Menu Routes Starts Here

Route::get('/publication/add', function(){return view('admin.publication.add');})->name('admin.publication.add');

Route::get('/publication/view', function(){return view('admin.publication.view');})->name('admin.publication.view');

Route::get('/publication/order', function(){return view('admin.publication.displayOrder');})->name('admin.publication.displayorder');

// Publication Menu Routes Ends Here




// Access & Visit Menu Routes Starts Here

Route::get('/access-visit/add', function(){return view('admin.access-visit.add');})->name('admin.accessvisit.add');

Route::get('/access-visit/view', function(){return view('admin.access-visit.view');})->name('admin.accessvisit.view');

// Access & Visit Menu Routes Ends Here






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
