<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class busDetails extends Controller
{
    public function index() {
        return view('user.busDetails');
    }
}
