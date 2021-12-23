<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Http\Request;

class addRoute extends Controller
{
    public function index() {
        return view('admin.addRoute');
    }

   
    public function uploadRoute(Request $request){
        $route = new Route;

        $route->from=$request->input('from');
        $route->to=$request->input('to');
        $route->date=$request->input('date');
        $route->save();
        return redirect('admin/addRoute');
    }
}
