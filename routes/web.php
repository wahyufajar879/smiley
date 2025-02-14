<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SingleBlogController;
use App\Http\Controllers\TopPlaceController;
use App\Http\Controllers\TourDetailsController;
use App\Http\Controllers\ElementsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SnorklingController;

//Admin

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/packages', [PackageController::class, 'index'])->name('packages');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/single-blog', [SingleBlogController::class, 'index'])->name('singleblog');
Route::get('/top-place', [TopPlaceController::class, 'index'])->name('top_place');
Route::get('/tour-details', [TourDetailsController::class, 'index'])->name('tour_details');
Route::get('/elements', [ElementsController::class, 'index'])->name('elements');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/snorklingtable', [SnorklingController::class, 'index'])->name('snorklingtable');

// ADMIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware('auth'); // Hanya bisa diakses setelah login
