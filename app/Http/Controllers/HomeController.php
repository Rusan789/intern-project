<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $routes = Route::all();
        return view('user.index',compact('routes'));
    }
}
