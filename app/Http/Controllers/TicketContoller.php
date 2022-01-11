<?php

namespace App\Http\Controllers;

use App\Models\bus;
use Illuminate\Http\Request;

class TicketContoller extends Controller
{
    public $bus_id;

    public function index($bus_id) {
        $this->bus_id = $bus_id;
        $bus = bus::where('bus_id',$this->bus_id)->first();
        return view('user.ticket', ['bus'=>$bus]);
    }
}
