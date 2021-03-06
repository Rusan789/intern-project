<?php

// use App\Http\Controllers\admin\adminDashboard;

use App\Http\Controllers\BusController;
use App\Http\Controllers\busDetails;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\searchBus;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\ShowOperators;
use App\Http\Controllers\TicketContoller;
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

// // auth routes
// // for customer
// Route::middleware(['auth:sanctum', 'verified'])->group(function() {
//     Route::get('users/dashboard', userDashboard::class)
//         ->name('userDashboard');
// });

// // For Admin
// Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
//     Route::get('/admin/adminDashboard', adminDashboard::class)
//         ->name('admindashboard');
// });



// User
//for index page
Route::get('/', [HomeController::class, "index"])->name('user.userHome');

//for bus detail page
Route::get('/busDetails/{bus_id}', [BusDetails::class, "index"])->name('user.busDetails');

//for search page
Route::get('/searchBus', [SearchBus::class, "search"])->name('user.searchBus');

// for home search
Route::get('/bus', [HomeController::class, "search"])->name('user.busSearch');


//admin
//for bus
Route::get('/admin/add-bus',[BusController::class,'addBus'])->name('admin.addBus');
Route::post('admin/create-bus',[BusController::class,'createBus'])->name('admin.createBus');
Route::get('/admin/getBus',[BusController::class,'getBus'])->name('admin.getBus');
Route::get('/admin/bus',[BusController::class,'getBusById'])->name('admin.getBusById');
Route::get('/admin/deleteBus/{bus_id}',[BusController::class,'deleteBus'])->name('admin.deleteBus');
Route::get('/admin/editBus/{bus_id}',[BusController::class,'editBus'])->name('admin.editBus');
Route::post('/admin/updateBus',[BusController::class,'updateBus'])->name('admin.updateBus');

//for operator
Route::get('/admin/add-operator',[OperatorController::class,'addOperator'])->name('admin.addOperator');
Route::post('/admin/create-operator',[OperatorController::class,'createOperator'])->name('admin.createOperator');
Route::get('/admin/getOperator',[OperatorController::class,'getOperator'])->name('admin.getOperator');
Route::get('/admin/operator/',[OperatorController::class,'getOperatorById'])->name('admin.getOperatorById');
Route::get('/admin/editOperator/{operator_id}',[OperatorController::class,'editOperator'])->name('admin.editOperator');
Route::post('/admin/updateOperator/',[OperatorController::class,'updateOperator'])->name('admin.updateOperator');
Route::get('/admin/deleteOperator/{operator_id}',[OperatorController::class,'deleteOperator'])->name('admin.deleteOperator');

//for route
Route::get('/admin/add-route',[RouteController::class,'addRoute'])->name('admin.addRoute');
Route::post('/admin/create-route',[RouteController::class,'createRoute'])->name('admin.createRoute');
Route::get('/admin/getRoute',[RouteController::class,'getRoute'])->name('admin.getRoute');
Route::get('/admin/route/{route_id}',[RouteController::class,'getRouteById'])->name('admin.getRouteById');
Route::get('/admin/editRoute/{route_id}',[RouteController::class,'editRoute'])->name('admin.editRoute');
Route::post('/admin/updateRoute',[RouteController::class,'updateRoute'])->name('admin.updateRoute');
Route::get('/admin/deleteRoute/{route_id}',[RouteController::class,'deleteRoute'])->name('admin.deleteRoute');

//middleware route for authentication
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//for invoice
Route::get('/khalti/verifyPayment',[InvoiceController::class, 'addInvoice'])->name('khalti.verifyPayment');
Route::post('/khalti/verifyPayment/create',[InvoiceController::class,'verify'])->name('payment.create');
Route::get('/ticket/{bus_id}', [TicketContoller::class, "index"])->name('user.ticket');