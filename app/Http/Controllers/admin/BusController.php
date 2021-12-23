<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusController extends Controller
{
    //display add bus page
    public function addBus() {
        return view('admin.addBus');
    }

    //function for adding bus in database
    public function createBus(Request $request) {

    }

    //function for getting bus details from database
    public function getBus() {

    }

    //function for getting bus by id
    public function getBusById() {

    }

    //function for getting bus by id for updating value
    public function editBus($id) {

    }

    //function for updating bus
    public function updateBus(Request $request) {

    }

    //function for deleting bus
    public function deleteBus($id) {

    }
}
