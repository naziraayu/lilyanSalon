<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index() {
        $transaksi = DB::table('transaksi')
        ->select('transaksi.*', 'booking.id_booking', 'menu.nama_treatment')
        ->join('booking', 'transaksi.id_booking', 'booking.id_booking')
        ->join('menu', 'transaksi.id_menu', 'menu.id_menu')
        ->get();
        return view('transaksi', compact('transaksi'));
    }
    
}
