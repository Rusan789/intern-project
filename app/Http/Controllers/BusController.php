<?php

namespace App\Http\Controllers;

use App\Models\bus;
use App\Models\Operator;
use App\Models\Route;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusController extends Controller
{

    public $routes;
    public $operators;
    //display add bus page
    public function addBus() {
        $routes = Route::all();
        $operators = Operator::all();
        // $operators = Operator::all();
        return view('admin.addBus',['routes'=>$routes, 'operators'=>$operators]);
    }

    //function for adding bus in database
    public function createBus(Request $request) {
        $buses = new bus();   
        $buses->bus_name = $request->bus_name;
        $buses->facilities = $request->facilities;
        $buses->time = $request->time;
        $buses->price = $request->price;
        $buses->driver_name = $request->driver_name;
        $buses->bus_number = $request->bus_number;
        // $buses->route_id = $request->routes->route_id;
        // $buses->operator_id = $request->operators->operator_id;
        $buses->route_id = $request->route_id;
        $buses->operator_id = $request->operator_id;
        
        $img = $request->file;
        $imageName=time().'.'.$img->getClientoriginalExtension();
        $request->file->move('img',$imageName);
        $buses->img=$imageName;

        $buses->save();
        return back()->with('message', 'Bus added successfully.');
    }

    //function for getting bus details from database
    public function getBus() {
        $buses = bus::orderBy('bus_id', 'Asc')->paginate(5);
        return view('admin.allBus', compact('buses'));
    }

    //function for getting bus by id
    public function getBusById() {

    }

    //function for getting bus by id for updating value
    public function editBus($bus_id) {
        $bus = bus::find($bus_id);
        $routes = Route::all();
        $operators = Operator::all();
        // return view('admin.editBus');
        return view('admin.editBus', compact('bus'),['routes'=>$routes, 'operators'=>$operators]);
    }

    //function for updating bus
    public function updateBus(Request $request) {
        $bus = bus::find($request->bus_id);
        $bus->bus_name = $request->bus_name;
        $bus->facilities = $request->facilities;
        $bus->time = $request->time;
        $bus->price = $request->price;
        $bus->driver_name = $request->driver_name;
        $bus->bus_number = $request->bus_number;
        // $buses->route_id = $request->routes->route_id;
        // $buses->operator_id = $request->operators->operator_id;
        $bus->route_id = $request->route_id;
        $bus->operator_id = $request->operator_id;

        $img = $request->file;
        if ($img) {
            $imageName=time().'.'.$img->getClientoriginalExtension();
            $request->file->move('img',$imageName);
            $bus->img=$imageName;
        }   

        $bus->save();
        return back()->with('message', 'Bus added successfully.');
    }

    //function for deleting bus
    public function deleteBus($bus_id) {
        bus::where('bus_id', $bus_id)->delete();
        return back()->with('message', 'Bus deleted successfully.');
    }
}
