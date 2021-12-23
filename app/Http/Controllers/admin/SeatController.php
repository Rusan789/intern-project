<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeatController extends Controller
{
    //display add seat page
    public function addSeat() {
        return view('admin.addSeat');
    }

    //function for adding seat in database
    public function createSeat(Request $request) {

    }

    //function for getting seat details from database
    public function getSeat() {

    }

    //function for getting seat by id
    public function getSeatById() {

    }

    //function for getting seat by id for updating value
    public function editSeat($id) {

    }

    //function for updating seat
    public function updateSeat(Request $request) {

    }

    //function for deleting seat
    public function deleteSeat($id) {

    }
}
