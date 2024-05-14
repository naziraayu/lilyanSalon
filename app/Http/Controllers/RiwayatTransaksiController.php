<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class RiwayatTransaksiController extends Controller
{
    public function index() {
        $customer = Customer::latest()->get();

        //passing posts to view
        return view('riwayatTransaksi', compact('customer'));
        // return view('customer',['data' => ModelsCustomer::all()]);
    }
}
