<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tipeKamarController;
use App\Http\Controllers\kamarController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\BookingController;

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
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin/dashboard');
});

//Booking
Route::get('/admin/booking', function () {
    return view('admin/booking/booking');
});
Route::get('/admin/addDataBooking', function () {
    return view('admin/booking/addBooking');
});
Route::get('/admin/editDataBooking', function () {
    return view('admin/booking/editBookingData');
});


// ----------------------------- Kamar  -----------------------------//
Route::controller(kamarController::class)->group(function () {
    Route::get('form/kamar/index', 'index')->name('form/kamar/index');
    Route::get('form/kamar/add', 'addKamar')->name('form/kamar/add');
    Route::post('form/kamar/save', 'saveKamar')->name('form/kamar/save');
    Route::post('form/kamar/delete', 'delete')->name('form/kamar/delete');
    // Route::get('form/leaves/page', 'leavesPage')->name('form/leaves/page');
});

// ----------------------------- Staff  -----------------------------//
Route::controller(StaffController::class)->group(function () {
    Route::get('form/staff/index', 'index')->name('form/staff/index');
    Route::get('form/staff/add', 'add')->name('form/staff/add');
    Route::post('form/staff/save', 'save')->name('form/staff/save');
    Route::get('form/staff/edit/{staff_id}', 'edit')->name('form/staff/edit');
    Route::post('form/staff/saveEdit', 'saveEdit')->name('form/staff/saveEdit');
    Route::post('form/staff/delete', 'delete')->name('form/staff/delete');
});


// ----------------------------- Tipe Kamar -----------------------------//
Route::controller(tipeKamarController::class)->group(function () {
    Route::get('form/tpKamar/index', 'index')->name('form/tpKamar/index');
    Route::get('form/tpKamar/add', 'add')->name('form/tpKamar/add');
    Route::post('form/tpKamar/save', 'saveTipeKamar')->name('form/tpKamar/save');
    Route::get('form/tpKamar/edit/{roomType_id}', 'edit')->name('form/tpKamar/edit');
    Route::post('form/tpKamar/saveEdit', 'saveEdit')->name('form/tpKamar/saveEdit');
    Route::post('form/tpKamar/delete', 'delete')->name('form/tpKamar/delete');
});
// ----------------------------- Fasilitas Hotel  -----------------------------//
Route::controller(FasilitasController::class)->group(function () {
    Route::get('form/fasilitas/index', 'index')->name('form/fasilitas/index');
    Route::get('form/fasilitas/add', 'add')->name('form/fasilitas/add');
    Route::post('form/fasilitas/save', 'save')->name('form/fasilitas/save');
    Route::get('form/fasilitas/edit/{nama}', 'edit')->name('form/fasilitas/edit');
    Route::post('form/fasilitas/saveEdit', 'saveEdit')->name('form/fasilitas/saveEdit');
    Route::post('form/fasilitas/delete', 'delete')->name('form/fasilitas/delete');
});

// ----------------------------- Booking  -----------------------------//
Route::controller(BookingController::class)->group(function () {
    Route::get('form/booking/index', 'index')->name('form/booking/index');
    Route::get('form/booking/add', 'add')->name('form/booking/add');
    Route::post('form/booking/save', 'save')->name('form/booking/save');
    Route::get('form/booking/nextAdd', 'nextAdd')->name('form/booking/nextAdd');
    Route::post('form/booking/saveBooking', 'saveBooking')->name('form/booking/saveBooking');
    Route::post('form/booking/delete', 'delete')->name('form/booking/delete');
});

//Management
Route::get('/admin/management', function () {
    return view('admin/management/managementAdmin');
});
Route::get('/admin/addManagement', function () {
    return view('admin/management/addManagement');
});
Route::get('/admin/editManagement', function () {
    return view('admin/management/editManagement');
});
