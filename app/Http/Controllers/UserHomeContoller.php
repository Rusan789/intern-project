<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHomeContoller extends Controller
{
    public function index() {
        return view('user.index');
    }
}
