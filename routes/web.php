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
Route::get('/admin/booking', function () {
    return view('admin/booking');
});
Route::get('/admin/tableData', function () {
    return view('admin/tableData');
});
Route::get('/admin/detailData', function () {
    return view('admin/detailData');
});
Route::get('/admin/editTable', function () {
    return view('admin/editTableData');
});


