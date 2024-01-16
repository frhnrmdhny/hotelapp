<?php

use Illuminate\Support\Facades\Route;

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


//Room
Route::get('/admin/room', function () {
    return view('admin/room/room');
});
Route::get('/admin/addDataRoom', function () {
    return view('admin/room/addRoom');
});
Route::get('/admin/editDataRoom', function () {
    return view('admin/room/editRoom');
});


//Type Room
Route::get('/admin/typeRoom', function () {
    return view('admin/typeRoom/typeRoom');
});
Route::get('/admin/addTypeRoom', function () {
    return view('admin/typeRoom/addTypeRoom');
});
Route::get('/admin/editTypeRoom', function () {
    return view('admin/typeRoom/editTypeRoom');
});


//Facility
Route::get('/admin/facility', function () {
    return view('admin/facilityRoom/facility');
});
Route::get('/admin/addDataFacility', function () {
    return view('admin/facilityRoom/addFacility');
});
Route::get('/admin/editDataFacility', function () {
    return view('admin/facilityRoom/editFacilityData');
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
