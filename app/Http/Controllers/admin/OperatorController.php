<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    //display add operator page
    public function addOperator() {
        return view('admin.addOperator');
    }

    //function for adding operator in database
    public function createOperator(Request $request) {

    }

    //function for getting operator details from database
    public function getOperator() {

    }

    //function for getting operator by id
    public function getOperatorById() {

    }

    //function for getting operator by id for updating value
    public function editOperator($id) {

    }

    //function for updating operator
    public function updateOperator(Request $request) {

    }

    //function for deleting operator
    public function deleteOperator($id) {

    }
}
