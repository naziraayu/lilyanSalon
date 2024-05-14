<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        // return view('booking',['booking' => Booking::all()]);
        // $data = Booking::get();
        // $data2 = Customer::get();
        // return view('booking',compact('data','data2'));

        $data = Booking::leftJoin('customer', 'booking.customer_id', '=', 'customer.id')
                    ->select('booking.*', 'customer.nama_lengkap')
                    ->get();

    return view('booking', compact('data'));
    }
//     public function index2(){
//    	 $booking = Booking::all();
//     	 return view('booking',['booking' => $booking]);
//    }
}
