<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    //display add operator page
    public function addOperator() {
        return view('admin.addOperator');
    }

    //function for adding seat in database
    public function createOperator(Request $request) {
        $operators = new Operator();
        $operators->operator_name = $request->operator_name;
        $operators->save();
        return back()->with('message', 'Seat added successfully.');
    }

    //function for getting seat details from database
    public function getOperator() {
        $operators = Operator::orderBy('operator_id', 'Asc')->paginate(5);
        // return view('admin.allSeat');
        return view('admin.allOperators', compact('operators'));
    }

    //function for getting operator by id
    public function getOperatorById() {
        // here goes code if we need to get operator by its id
    }

    //function for getting Operator by id for updating value
    public function editOperator($operator_id) {
        $operator = Operator::find($operator_id);
        return view('admin.editOperator', compact('operator'));
    }

    //function for updating seat
    public function updateOperator(Request $request) {
        $operator = Operator::find($request->operator_id);
        $operator->operator_name = $request->operator_name;
        $operator->save();
        return back()->with('message', 'Operator updated successfully.');
    }

    //function for deleting Operator
    public function deleteSeat($operator_id) {
        Operator::where('seat_id',$operator_id)->delete();
        return back()->with('message','Operator deleted successfully');
    }
}
