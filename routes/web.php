<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RentalController;
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

Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('/');

Route::get('/about', [App\Http\Controllers\HomeController::class,'about'])->name('about');
Auth::routes();

Route::get('/home', [RentalController::class, 'rent'])->name('home');
//Admin
Route::get('admin',[AdminController::class,'index'])->name('admin')->middleware('admin');

Route::get('admin/rents',[AdminController::class,'rents'])->name('admin.rents')->middleware('admin');
Route::get('admin/bookings',[AdminController::class,'bookings'])->name('bookings')->middleware('admin');

Route::get('admin/bookings/delete/{id}',[BookingController::class,'delete'])->name('delete.bookings')->middleware('admin');

Route::get('admin/bookings/active/{id}',[BookingController::class,'active'])->name('active.bookings')->middleware('admin');

Route::get('admin/bookings/inactive/{id}',[BookingController::class,'inactive'])->name('inactive.bookings')->middleware('admin');
//END-ADMIN
Route::get('rents',[RentalController::class,'index'])->name('rents');
Route::get('rents/show/{id}',[RentalController::class,'show'])->name('rents.show');

Route::get('rents/edit/{id}',[RentalController::class,'edit'])->name('rents.edit');

Route::get('rents/delete/{id}',[RentalController::class,'delete'])->name('rents.delete');
Route::get('rents/create',[RentalController::class,'create'])->name('create.rent')->middleware('rental');
Route::post('store-rents',[RentalController::class,'store'])->name('store.rents')->middleware('rental');

Route::post('update-rents/{id}',[RentalController::class,'update'])->name('update.rents')->middleware('rental');
Route::get('/convert-to-json', function () {
    return App\Models\Rental::paginate(6);
});

Route::get('booking/{id}',[BookingController::class,'create'])->name('booking.create');