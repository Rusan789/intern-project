<?php

// use App\Http\Controllers\admin\adminDashboard;
use App\Http\Controllers\BusController;
use App\Http\Controllers\busDetails;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\searchBus;
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
Route::get('/', [HomeController::class, "index"])->name('userHome');
Route::get('/busDetails', [BusDetails::class, "index"])->name('busDetails');
Route::get('/searchBus', [SearchBus::class, "index"])->name('searchBus');

//for bus
Route::get('/add-bus',[BusController::class,'addBus'])->name('admin.addBus');
Route::post('/create-bus',[BusController::class,'createBus'])->name('admin.createBus');
Route::get('/bus',[BusController::class,'getBus'])->name('admin.getBus');
Route::get('/bus/{id}',[BusController::class,'getBusById'])->name('admin.getBusById');
Route::get('/editBus/{id}',[BusController::class,'editBus'])->name('admin.editBus');
Route::get('/updateBus/{id}',[BusController::class,'updateBus'])->name('admin.updateBus');
Route::get('/deleteBus/{id}',[BusController::class,'deleteBus'])->name('admin.deleteBus');

//for operator
Route::get('/add-operator',[OperatorController::class,'addOperator'])->name('admin.addOperator');
Route::post('/create-operator',[OperatorController::class,'createOperator'])->name('admin.createOperator');
Route::get('/operator',[OperatorController::class,'getOperator'])->name('admin.getOperator');
Route::get('/operator/{id}',[OperatorController::class,'getOperatorById'])->name('admin.getOperatorById');
Route::get('/editOperator/{id}',[OperatorController::class,'editOperator'])->name('admin.editOperator');
Route::get('/updateOperator/{id}',[OperatorController::class,'updateOperator'])->name('admin.updateOperator');
Route::get('/deleteOperator/{id}',[OperatorController::class,'deleteOperator'])->name('admin.deleteOperator');

//for route
Route::get('/add-route',[RouteController::class,'addRoute'])->name('admin.addRoute');
Route::post('/create-route',[RouteController::class,'createRoute'])->name('admin.createRoute');
Route::get('/route',[RouteController::class,'getRoute'])->name('admin.getRoute');
Route::get('/operator/{id}',[RouteController::class,'getRouteById'])->name('admin.getRouteById');
Route::get('/editRoute/{id}',[RouteController::class,'editRoute'])->name('admin.editRoute');
Route::get('/updateRoute/{id}',[RouteController::class,'updateRoute'])->name('admin.updateRoute');
Route::get('/deleteRoute/{id}',[RouteController::class,'deleteRoute'])->name('admin.deleteRoute');

//for seat
Route::get('/add-seat',[RouteController::class,'addSeat'])->name('admin.addSeat');
Route::post('/create-seat',[RouteController::class,'createSeat'])->name('admin.createSeat');
Route::get('/seat',[RouteController::class,'getSeat'])->name('admin.getSeat');
Route::get('/seat/{id}',[RouteController::class,'getSeatById'])->name('admin.getSeatById');
Route::get('/editSeat/{id}',[RouteController::class,'editSeat'])->name('admin.editSeat');
Route::get('/updateSeat/{id}',[RouteController::class,'updateSeat'])->name('admin.updateSeat');
Route::get('/deleteSeat/{id}',[RouteController::class,'deleteSeat'])->name('admin.deleteSeat');