<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){

        $data = Booking::leftJoin('customer', 'booking.customer_id', '=', 'customer.id')
                    ->leftJoin('menu', 'booking.menu_id', '=', 'menu.id')
                    ->select('booking.*', 'customer.name', 'menu.image', 'menu.nama_treatment')
                    ->orderBy('booking.id', 'desc')
                    ->get();

        return view('booking', compact('data'));
    } 
//     public function index2(){
//    	 $booking = Booking::all();
//     	 return view('booking',['booking' => $booking]);
//    }
}
