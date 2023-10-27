<?php

use App\Http\Controllers\Admin\BusinessResponseController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\HrResponseController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Guest\GuestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/kalkulasi-hr', [GuestController::class, 'hrCalculation'])->name('hr.calculation');
Route::post('/hasil-kalkulasi-form-hr', [GuestController::class, 'resultCalculationHrForm'])->name('result.calculation.hr.form');

Route::get('/kalkulasi-bisnis', [GuestController::class, 'businessCalculation'])->name('business.calculation');
Route::post('/hasil-kalkulasi-form-bisnis', [GuestController::class, 'resultCalculationBusinessForm'])->name('result.calculation.business.form');

Route::get('/admin/login', [AuthController::class, 'index'])->name('admin.login')->middleware('guest');
Route::post('/admin/auth', [AuthController::class, 'authenticate'])->name('auth')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/business-form-response', [BusinessResponseController::class, 'index'])->name('admin.business.form.response');
    Route::get('/hr-form-response', [HrResponseController::class, 'index'])->name('admin.hr.form.response');
});
