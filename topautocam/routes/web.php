<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::middleware('locale')->group(function () {

    Route::get('/', [SiteController::class, 'index'])->name('home');
    Route::get('/cars', [SiteController::class, 'cars'])->name('car-index');
    Route::get('/motorbikes', [SiteController::class, 'motorbikes'])->name('motorbike-index');
    Route::get('/parts', [SiteController::class, 'parts'])->name('part-index');
    Route::get('/loan', [SiteController::class, 'loan'])->name('loan-index');
    Route::get('/login', [SiteController::class, 'login'])->name('login');
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
    Route::post('/locale', [SiteController::class, 'locale'])->name('set-locale');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog-index');

});
