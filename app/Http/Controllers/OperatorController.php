<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use App\Models\Route;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    //display add operator page
    public function addOperator() {
        return view('admin.addOperator');
    }

    //function for adding operator in database
    public function createOperator(Request $request) {
        $operator = new Operator();
        $operator->operator_name = $request->operator_name;
        $operator->save();
        return back()->with('message', 'Operator added successfully.');
    }

    //function for getting operator details from database
    public function getOperator() {
        // $operators = Operator::orderBy('operator_id', 'Asc')->get();
        return view('admin.allOperator');
        // return view('admin.allOperator',compact('operators'));
    }

    //function for getting operator by id
    public function getOperatorById() {
        // $operator = Operator::where('operator_id', $operator_id)->first();
    }

    //function for getting operator by id for updating value
    public function editOperator() {
        // $operator = Operator::find($operator_id);
        return view('admin.editOperator');
        // return view('admin.editOperator', compact('operator'));
    }

    //function for updating operator
    public function updateOperator() {
        // $operator = Operator::find($request->operator_id);
        // $operator->operator_name = $request->operator_name;
        // $operator->save();
        // return back()->with('message', 'Operator updated successfully.');
    }

    //function for deleting operator
    public function deleteOperator() {
        // Operator::where('id', $operator_id)->delete();
        // return back()->with('message', 'Operator deleted successfully.');
    }
}
