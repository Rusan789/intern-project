<?php

namespace App\Http\Controllers;

use App\Models\bus;
use App\Models\Route;
use Illuminate\Http\Request;

class SearchBus extends Controller
{
    public function index(Request $request) {
        $search = $request['search'] ?? "";
        $search1 = $request['search1'] ?? "";
        if ($search != "") {
            $buses = bus::where('bus_name','LIKE',"%$search%")
            ->paginate(3);
        }elseif ($search1 != "") {
            $buses = bus::where('time','LIKE',"%$search1")
            ->paginate(3);
        }else {
            $buses = bus::orderBy('bus_id', 'Asc')->paginate(3);
        }      
        return view('user.searchBus',compact('buses'));
    }
}
