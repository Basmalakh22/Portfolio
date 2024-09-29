<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
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

Route::get('/home', function () {
    return view('dashboard.index');
})->name('home');

// Route::get('home', [DashboardController::class,'index'])->name('home');

Route::get('/about', function () {
    return view('dashboard.about');
})->name('about');

Route::get('/resume', function () {
    return view('dashboard.resume');
})->name('resume');

Route::get('/portfolio', function () {
    return view('dashboard.portfolio');
})->name('portfolio');

Route::get('/Multi-Vendor-Store', function () {
    return view('dashboard.Multi-Vendor Store');
})->name('Multi-Vendor Store');

Route::get('/Invoice-System', function () {
    return view('dashboard.Invoice System');
})->name('Invoice System');

Route::get('/BIOVOLTEX', function () {
    return view('dashboard.BIOVOLTEX');
})->name('BIOVOLTEX');

Route::get('/contact', function () {
    return view('dashboard.contact'); // displays the form
});
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact');


