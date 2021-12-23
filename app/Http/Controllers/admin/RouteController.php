<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //display add route page
    public function addRoute() {
        return view('admin.addOperator');
    }

    //function for adding route in database
    public function createRoute(Request $request) {

    }

    //function for getting route details from database
    public function getRoute() {

    }

    //function for getting route by id
    public function getRouteById() {

    }

    //function for getting route by id for updating value
    public function editRoute($id) {

    }

    //function for updating route
    public function updateRoute(Request $request) {

    }

    //function for deleting route
    public function deleteRoute($id) {

    }
}
