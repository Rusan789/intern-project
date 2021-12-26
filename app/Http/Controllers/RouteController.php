<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    //display add route page
    public function addRoute() {
        return view('admin.addRoute');
    }

    //function for adding route in database
    public function createRoute(Request $request) {
        $route = new Route();
        $route->from = $request->from;
        $route->to = $request->to;
        $route->date = $request->date;
        $route->save();
        return back()->with('message','Route added successfully.');
    }

    //function for getting route details from database
    public function getRoute() {
        $routes = Route::orderBy('route_id','Asc')->get();
        // return view('admin.allRoute');
        return view('admin.allRoute',compact('routes'));
    }

    //function for getting route by id
    public function getRouteById($route_id) {
        Route::where('route_id', $route_id)->first();
    }

    //function for getting route by id for updating value
    public function editRoute($route_id) {
        $route = Route::find($route_id);
        return view('admin.editRoute',compact('route'));
    }

    //function for updating route
    public function updateRoute(Request $request) {
        $route = Route::find($request->route_id);
        $route->from = $request->from;
        $route->to = $request->to;
        $route->date = $request->date;
        $route->save();
        return back()->with('message','Route updated successfully.');
    }

    //function for deleting route
    public function deleteRoute($route_id) {
        Route::where('route_id', $route_id)->delete();
        return back()->with('message','Route deleted successfully.');
    }
}
