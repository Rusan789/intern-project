<?php

use App\Http\Controllers\admin\addBus;
use App\Http\Controllers\admin\addOperator;
use App\Http\Controllers\admin\addRoute;
use App\Http\Controllers\admin\addSeat;
use App\Http\Controllers\admin\adminDashboard;
use App\Http\Controllers\admin\allBus;
use App\Http\Controllers\admin\allOperator;
use App\Http\Controllers\admin\allRoute;
use App\Http\Controllers\admin\allSeat;
use App\Http\Controllers\admin\editBus;
use App\Http\Controllers\admin\editOperator;
use App\Http\Controllers\admin\editRoute;
use App\Http\Controllers\admin\editSeat;
use App\Http\Controllers\busDetails;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\searchBus;
use App\Http\Controllers\userDashboard;
use App\Http\Controllers\UserHomeContoller;
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

//auth routes
//for customer
// Route::middleware(['auth:sanctum', 'verified'])->group(function() {
//     Route::get('users/dashboard', userDashboard::class)
//         ->name('userDashboard');
// });

//For Admin
// Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
//     Route::get('/admin/adminDashboard', adminDashboard::class)
//         ->name('admindashboard');
// });

// User Routes
Route::get('/', [UserHomeContoller::class, "index"])->name('userHome');
Route::get('/busDetails', [busDetails::class, "index"])->name('busDetails');
Route::get('/searchBus', [searchBus::class, "index"])->name('searchBus');

//for bus
Route::get('admin/addBus', [addBus::class, "index"])->name('addBus');
Route::get('admin/editBus', [editBus::class, "index"])->name('editBus');
Route::get('admin/allBus', [allBus::class, "index"])->name('allBus');

//for operator
Route::get('admin/addOperator', [addOperator::class, "index"])->name('addOperator');
Route::get('admin/editOperator', [editOperator::class, "index"])->name('editOperator');
Route::get('admin/allOperator', [allOperator::class, "index"])->name('allOperator');

//for route
Route::get('admin/addRoute', [addRoute::class, "index"])->name('addRoute');
Route::post('admin/uploadRoute', [addRoute::class, "uploadRoute"])->name('uploadRoute');
Route::get('admin/editRoute', [editRoute::class, "index"])->name('editRoute');
Route::get('admin/allRoute', [allRoute::class, "index"])->name('allRoute');

//for seat
Route::get('admin/addSeat', [addSeat::class, "index"])->name('addSeat');
Route::get('admin/editSeat', [editSeat::class, "index"])->name('editSeat');
Route::get('admin/allSeat', [allSeat::class, "index"])->name('allSeat');