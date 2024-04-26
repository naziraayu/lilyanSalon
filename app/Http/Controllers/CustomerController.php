<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Customer;
use App\Models\Customer as ModelsCustomer;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::latest()->get();

        //passing posts to view
        return view('customer', compact('customer'));
        // return view('customer',['data' => ModelsCustomer::all()]);
    }
}
