<?php

namespace App\Http\Controllers;

use App\Models\seat;
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
        $seats = seat::orderBy('seat_id', 'Asc')->get();
        return view('admin.allSeat', compact('seats'));
    }

    //function for getting seat by id
    public function getSeatById() {

    }

    //function for getting seat by id for updating value
    public function editSeat($seat_id) {
        $seat = seat::find($seat_id);
        return view('admin.editSeat', compact('seat'));
    }

    //function for updating seat
    public function updateSeat(Request $request) {

    }

    //function for deleting seat
    public function deleteSeat($seat_id) {

    }
}
