<?php

namespace App\Http\Controllers;

use App\Models\bus;
use App\Models\Route;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $routes = Route::all();
        return view('user.index',compact('routes'));
    }

    
    public function search(Request $request) {
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
        return view('user.searchBus', compact('buses'));
    }
}

// <div class="">
//               <div class="mt-3">
//                 <h1>Going for tour?</h1>
//                 <h4 class="pt-2">Search Bus For Tour</h4>
//               </div>              
//               <div class="d-flex justify-content-center pb-5">
//                 <button type="button" class="btn btn-primary bus-btn p-2">
//                   <a href="{{ route('user.searchBus') }}">Search Bus &rarr;</a>
//                 </button>
//               </div>
//             </div>
