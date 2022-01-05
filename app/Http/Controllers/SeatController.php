<?php

namespace App\Http\Controllers;

use App\Models\bus;
use App\Models\seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    //display add seat page
    public $buses;
    public function addSeat() {
        $buses = bus::all();
        return view('admin.addSeat',compact('buses'));
    }

    //function for adding seat in database
    public function createSeat(Request $request) {
        $request->validate([
            'seat_number' => 'required'
        ]);
        $seats = new seat();
        $seats->seat_number = $request->seat_number;
        $seats->bus_id = $request->bus_id;
        $seats->save();
        return back()->with('message', 'Seat added successfully.');
    }

    //function for getting seat details from database
    public function getSeat() {
        $seats = seat::orderBy('seat_id', 'Asc')->paginate(5);
        // return view('admin.allSeat');
        return view('admin.allSeat', compact('seats'));
    }

    //function for getting seat by id
    public function getSeatById() {

    }

    //function for getting seat by id for updating value
    public function editSeat($seat_id) {
        $seat = seat::find($seat_id);
        $buses = bus::all();
        return view('admin.editSeat', compact('seat'),['buses'=>$buses]);
    }

    //function for updating seat
    public function updateSeat(Request $request) {
        $request->validate([
            'seat_number' => 'required'
        ]);
        $seat = seat::find($request->seat_id);
        $seat->seat_number = $request->seat_number;
        $seat->bus_id = $request->bus_id;
        $seat->save();
        return back()->with('message', 'Seat updated successfully.');
    }

    //function for deleting seat
    public function deleteSeat($seat_id) {
        seat::where('seat_id',$seat_id)->delete();
        return back()->with('message','Seat deleted successfully');
    }
}
