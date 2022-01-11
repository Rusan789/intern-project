<?php

namespace App\Http\Controllers;

use App\Models\bus;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function addInvoice() {
        $buses = bus::all();
        $users = User::all();
        return view('user.invoice',compact('buses','users'));
    }

    public function verify(Request $request) {
        $invoices = new Invoice();
        $invoices->name = $request->name;
        $invoices->email = $request->email;
        $invoices->phone = $request->phone;
        $invoices->price = $request->price;
        $invoices->save();
        return back()->with('message', 'Payment successfully.');
        // $token = $request->token;
        // $args = http_build_query(array(
        //     'token' => $token,
        //     'amount'  => 1000
        // ));
        
        // $url = "https://khalti.com/api/v2/payment/verify/";
        
        // # Make the call using API.
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // $secret_key = config('app.khalti_secret_key');
        
        // $headers = ["Authorization: Key $secret_key"];
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        // // Response
        // $response = curl_exec($ch);
        // $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // curl_close($ch);  
        
        // // if($status_code == 200) {
        // //     return response()->json(['success' => 1, 'redirecto' => route('khalti.verifyPayment')]);
        // // } else {
        // //     return response()->json(['error' => 1, 'message' => 'Payment Failed']);
        // // }
        // return $response;
    }

    public function storePayment (Request $request) {
        // store data to database
        // $request->http_response_code
        return response(['status' => 200]);
    }
    
    
}
