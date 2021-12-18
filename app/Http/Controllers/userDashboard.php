<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userDashboard extends Controller
{
    public function index() {
        return view('user.userDashboard');
    }
}
