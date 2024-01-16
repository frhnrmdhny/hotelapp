<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\tipeKamarController;
use App\Http\Controllers\hotelFacilitiesController;
use App\Http\Controllers\kamarController;
use App\Http\Controllers\FasilitasController; 
use App\Http\Controllers\StaffController;    
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

/** set side bar active dynamic */
function set_active($route) {
    if(is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active': '';
}

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// ----------------------------- main dashboard ------------------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
    Route::get('/profile', 'profile')->name('profile');
});

// -----------------------------login----------------------------------------//
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->name('logout');
});

// ------------------------------ register ---------------------------------//
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'storeUser')->name('register');
});

// ----------------------------- forget password ----------------------------//
Route::controller(ForgotPasswordController::class)->group(function () {
    Route::get('forget-password', 'getEmail')->name('forget-password');
    Route::post('forget-password', 'postEmail')->name('forget-password');
});

// ----------------------------- reset password -----------------------------//
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('reset-password/{token}', 'getPassword');
    Route::post('reset-password', 'updatePassword');
});

// ----------------------------- booking -----------------------------//
Route::controller(BookingController::class)->group(function () {
    Route::get('form/allbooking', 'allbooking')->name('form/allbooking')->middleware('auth');
    Route::get('form/booking/edit/{bkg_id}', 'bookingEdit')->middleware('auth');
    Route::get('form/booking/add', 'bookingAdd')->middleware('auth')->name('form/booking/add');
    Route::post('form/booking/save', 'saveRecord')->middleware('auth')->name('form/booking/save');
    Route::post('form/booking/update', 'updateRecord')->middleware('auth')->name('form/booking/update');
    Route::post('form/booking/delete', 'deleteRecord')->middleware('auth')->name('form/booking/delete');
});

// ---------------------------- customers --------------------------//
Route::controller(CustomerController::class)->group(function () {
    Route::get('form/allcustomers/page', 'allCustomers')->middleware('auth')->name('form/allcustomers/page');
    Route::get('form/addcustomer/page', 'addCustomer')->middleware('auth')->name('form/addcustomer/page');
    Route::post('form/addcustomer/save', 'saveCustomer')->middleware('auth')->name('form/addcustomer/save');
    Route::get('form/customer/edit/{bkg_customer_id}', 'updateCustomer')->middleware('auth');
    Route::post('form/customer/update', 'updateRecord')->middleware('auth')->name('form/customer/update');
    Route::post('form/customer/delete', 'deleteRecord')->middleware('auth')->name('form/customer/delete');
});

// ----------------------------- rooms -----------------------------//
Route::controller(RoomsController::class)->group(function () {
    Route::get('form/allrooms/page', 'allrooms')->middleware('auth')->name('form/allrooms/page');
    Route::get('form/addroom/page', 'addRoom')->middleware('auth')->name('form/addroom/page');
    Route::get('form/room/edit/{bkg_room_id}', 'editRoom')->middleware('auth');
    Route::post('form/room/save', 'saveRecordRoom')->middleware('auth')->name('form/room/save');
    Route::post('form/room/delete', 'deleteRecord')->middleware('auth')->name('form/room/delete');
    Route::post('form/room/update', 'updateRecord')->middleware('auth')->name('form/room/update');
});

// ----------------------- user management -------------------------//
Route::controller(UserManagementController::class)->group(function () {
    Route::get('users/list/page', 'userList')->middleware('auth')->name('users/list/page');
    Route::get('users/add/new', 'userAddNew')->middleware('auth')->name('users/add/new'); /** add new users */
    Route::get('users/add/edit/{user_id}', 'userView'); /** add new users */
    Route::post('users/update', 'userUpdate')->name('users/update'); /** update record */
    Route::get('users/delete/{id}', 'userDelete')->name('users/delete'); /** delere record */
    Route::get('get-users-data', 'getUsersData')->name('get-users-data'); /** get all data users */
});

// ----------------------------- employee -----------------------------//
Route::controller(EmployeeController::class)->group(function () {
    Route::get('form/emplyee/list', 'employeesList')->middleware('auth')->name('form/emplyee/list');
    Route::get('form/employee/add', 'employeesAdd')->middleware('auth')->name('form/employee/add');
    Route::get('form/leaves/page', 'leavesPage')->middleware('auth')->name('form/leaves/page');
});

// ----------------------------- Tipe Kamar -----------------------------//
Route::controller(tipeKamarController::class)->group(function () {
    Route::get('form/tpKamar/index', 'index')->middleware('auth')->name('form/tpKamar/index');
    Route::get('form/tpKamar/add', 'add')->middleware('auth')->name('form/tpKamar/add');
    Route::post('form/tpKamar/save', 'saveTipeKamar')->middleware('auth')->name('form/tpKamar/save');
    Route::get('form/tpKamar/edit/{roomType_id}', 'edit')->middleware('auth')->name('form/tpKamar/edit');
    Route::post('form/tpKamar/saveEdit', 'saveEdit')->middleware('auth')->name('form/tpKamar/saveEdit');
    Route::post('form/tpKamar/delete', 'delete')->middleware('auth')->name('form/tpKamar/delete');
});
// ----------------------------- Fasilitas Hotel  -----------------------------//
Route::controller(FasilitasController::class)->group(function () {
    Route::get('form/fasilitas/index', 'index')->middleware('auth')->name('form/fasilitas/index');
    Route::get('form/fasilitas/add', 'add')->middleware('auth')->name('form/fasilitas/add');
    Route::post('form/fasilitas/save', 'save')->middleware('auth')->name('form/fasilitas/save');
});

// ----------------------------- Kamar  -----------------------------//
Route::controller(kamarController::class)->group(function () {
    Route::get('form/kamar/index', 'index')->middleware('auth')->name('form/kamar/index');
    Route::get('form/kamar/add', 'addKamar')->middleware('auth')->name('form/kamar/add');
    Route::post('form/kamar/save', 'saveKamar')->middleware('auth')->name('form/kamar/save');
    // Route::get('form/leaves/page', 'leavesPage')->middleware('auth')->name('form/leaves/page');
});

// ----------------------------- Staff  -----------------------------//
Route::controller(StaffController::class)->group(function () {
    Route::get('form/staff/index', 'index')->middleware('auth')->name('form/staff/index');
    Route::get('form/staff/add', 'add')->middleware('auth')->name('form/staff/add');
    Route::post('form/staff/save', 'save')->middleware('auth')->name('form/staff/save');
    Route::get('form/staff/edit/{staff_id}', 'edit')->middleware('auth')->name('form/staff/edit');
    Route::post('form/staff/saveEdit', 'saveEdit')->middleware('auth')->name('form/staff/saveEdit');
});