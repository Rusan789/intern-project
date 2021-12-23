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
Route::get('/add-bus',[BusController::class,'addBus']);
Route::post('/create-bus',[BusController::class,'createBus'])->name('admin.addBus');
Route::get('/bus',[BusController::class,'getBus']);
Route::get('/bus/{id}',[BusController::class,'getBusById']);
Route::get('/editBus/{id}',[BusController::class,'editBus']);
Route::get('/updateBus/{id}',[BusController::class,'updateBus'])->name('admin.updateBus');
Route::get('/deleteBus/{id}',[BusController::class,'deleteBus']);

//for operator
Route::get('/add-operator',[OperatorController::class,'addOperator']);
Route::post('/create-operator',[OperatorController::class,'createOperator'])->name('admin.addOperator');
Route::get('/operator',[OperatorController::class,'getOperator']);
Route::get('/operator/{id}',[OperatorController::class,'getOperatorById']);
Route::get('/editOperator/{id}',[OperatorController::class,'editOperator']);
Route::get('/updateOperator/{id}',[OperatorController::class,'updateOperator'])->name('admin.editOperator');
Route::get('/deleteOperator/{id}',[OperatorController::class,'deleteOperator']);

//for route
Route::get('/add-route',[RouteController::class,'addRoute']);
Route::post('/create-route',[RouteController::class,'createRoute'])->name('admin.addRoute');
Route::get('/route',[RouteController::class,'getRoute']);
Route::get('/operator/{id}',[RouteController::class,'getRouteById']);
Route::get('/editRoute/{id}',[RouteController::class,'editRoute']);
Route::get('/updateRoute/{id}',[RouteController::class,'updateRoute'])->name('admin.editRoute');
Route::get('/deleteRoute/{id}',[RouteController::class,'deleteRoute']);

//for seat
Route::get('/add-seat',[RouteController::class,'addSeat']);
Route::post('/create-seat',[RouteController::class,'createSeat'])->name('admin.addSeat');
Route::get('/seat',[RouteController::class,'getSeat']);
Route::get('/seat/{id}',[RouteController::class,'getSeatById']);
Route::get('/editSeat/{id}',[RouteController::class,'editSeat']);
Route::get('/updateSeat/{id}',[RouteController::class,'updateSeat'])->name('admin.editSeat');
Route::get('/deleteSeat/{id}',[RouteController::class,'deleteSeat']);