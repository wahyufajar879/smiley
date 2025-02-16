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
use App\Http\Controllers\DataSnorklingController;
use App\Http\Controllers\DataTicketController;
use App\Http\Controllers\DataTripController;
use App\Http\Controllers\DataRentMotorbikeController;
use App\Http\Controllers\DataBlogController;
use App\Http\Controllers\SnorklingOrderController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\RentController;

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
// Route::get('/snorklingtable', [SnorklingController::class, 'index'])->name('snorklingtable');

// ADMIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware('auth'); // Hanya bisa diakses setelah login
// END ADMIN

// DATA SNORKLING
Route::resource('data_snorklings', DataSnorklingController::class);
// END DATA SNORKLING

// DATA Ticket
Route::resource('data_tickets', DataTicketController::class);
// END DATA Ticket

// DATA Trip
Route::resource('data_trips', DataTripController::class);
// END DATA Trip

// DATA Rent Motorbike
Route::resource('data_rent_motorbikes', DataRentMotorbikeController::class);
// END DATA Rent Motorbike

// DATA Blog
Route::resource('data_blogs', DataBlogController::class);
// END DATA Blog

// Snorkling Order
Route::get('/get-destinations', [SnorklingController::class, 'getDestinations'])->name('get.destinations');
Route::resource('snorklings', SnorklingController::class);
// End Snorkling Order

// Ticket Order
Route::resource('tickets', TicketController::class);
// Rute untuk mengambil data boat dan time
Route::get('/get-boats', [TicketController::class, 'getBoats'])->name('get.boats');
Route::get('/get-times', [TicketController::class, 'getTimes'])->name('get.times');
// End Ticket Order

// Trip Order
Route::resource('trips', TripController::class);
// Rute untuk mengambil data place_to_go
Route::get('/get-place-to-go', [TripController::class, 'getPlaceToGo'])->name('get.place-to-go');
// End Trip Order

// Trip Order
Route::resource('rents', RentController::class);
// End Trip Order
