<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchBus extends Controller
{
    public function index() {
        return view('user.searchBus');
    }
}
