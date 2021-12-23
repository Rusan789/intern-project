<?php

namespace App\Http\Controllers;

use App\Models\bus;
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
        $buses = bus::orderBy('id', 'Asc')->get();
        return view('admin.allBus', compact('buses'));
    }

    //function for getting bus by id
    public function getBusById() {

    }

    //function for getting bus by id for updating value
    public function editBus($id) {
        $bus = bus::find($id);
        return view('admin.editBus', compact('bus'));
    }

    //function for updating bus
    public function updateBus(Request $request) {

    }

    //function for deleting bus
    public function deleteBus($id) {

    }
}
