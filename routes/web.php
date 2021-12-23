<?php

// use App\Http\Controllers\admin\adminDashboard;

use App\Http\Controllers\BusController;
use App\Http\Controllers\busDetails;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\searchBus;
use App\Http\Controllers\SeatController;
// use App\Http\Controllers\userDashboard;
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



// User
Route::get('/', [HomeController::class, "index"])->name('user.userHome');
Route::get('/busDetails', [BusDetails::class, "index"])->name('user.busDetails');
Route::get('/searchBus', [SearchBus::class, "index"])->name('user.searchBus');

//for bus
Route::get('/add-bus',[BusController::class,'addBus'])->name('admin.addBus');
Route::post('/create-bus',[BusController::class,'createBus'])->name('admin.createBus');
Route::get('/buses',[BusController::class,'getBus'])->name('admin.getBus');
Route::get('/buses/{id}',[BusController::class,'getBusById'])->name('admin.getBusById');
Route::get('/deleteBus/{id}',[BusController::class,'deleteBus'])->name('admin.deleteBus');
Route::get('/editBus/{id}',[BusController::class,'editBus'])->name('admin.editBus');
Route::post('/updateBus',[BusController::class,'updateBus'])->name('admin.updateBus');

//for operator
Route::get('/admin/add-operator',[OperatorController::class,'addOperator'])->name('admin.addOperator');
Route::post('/admin/create-operator',[OperatorController::class,'createOperator'])->name('admin.createOperator');
Route::get('/admin/operator',[OperatorController::class,'getOperator'])->name('admin.getOperator');
Route::get('/admin/operator/{id}',[OperatorController::class,'getOperatorById'])->name('admin.getOperatorById');
Route::get('/admin/editOperator/{id}',[OperatorController::class,'editOperator'])->name('admin.editOperator');
Route::get('/admin/updateOperator/{id}',[OperatorController::class,'updateOperator'])->name('admin.updateOperator');
Route::get('/admin/deleteOperator/{id}',[OperatorController::class,'deleteOperator'])->name('admin.deleteOperator');

//for route
Route::get('/admin/add-route',[RouteController::class,'addRoute'])->name('admin.addRoute');
Route::post('/admin/create-route',[RouteController::class,'createRoute'])->name('admin.createRoute');
Route::get('/admin/route',[RouteController::class,'getRoute'])->name('admin.getRoute');
Route::get('/admin/operator/{id}',[RouteController::class,'getRouteById'])->name('admin.getRouteById');
Route::get('/admin/editRoute/{id}',[RouteController::class,'editRoute'])->name('admin.editRoute');
Route::get('/admin/updateRoute/{id}',[RouteController::class,'updateRoute'])->name('admin.updateRoute');
Route::get('/admin/deleteRoute/{id}',[RouteController::class,'deleteRoute'])->name('admin.deleteRoute');

//for seat
Route::get('/admin/add-seat',[SeatController::class,'addSeat'])->name('admin.addSeat');
Route::post('/admin/create-seat',[SeatController::class,'createSeat'])->name('admin.createSeat');
Route::get('/admin/seat',[SeatController::class,'getSeat'])->name('admin.getSeat');
Route::get('/admin/seat/{id}',[SeatController::class,'getSeatById'])->name('admin.getSeatById');
Route::get('/admin/editSeat/{id}',[SeatController::class,'editSeat'])->name('admin.editSeat');
Route::get('/admin/updateSeat/{id}',[SeatController::class,'updateSeat'])->name('admin.updateSeat');
Route::get('/admin/deleteSeat/{id}',[SeatController::class,'deleteSeat'])->name('admin.deleteSeat');