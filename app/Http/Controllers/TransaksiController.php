<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index(Request $request) {
        $id_booking = $request->input('id_booking'); // Ambil ID Booking dari request
    
        $transaksi = DB::table('transaksi')
            ->select('transaksi.*', 'booking.id_booking', 'menu.nama_treatment', 'menu.harga')
            ->join('booking', 'transaksi.id_booking', 'booking.id_booking')
            ->join('menu', 'transaksi.id_menu', 'menu.id_menu')
            ->where('transaksi.id_booking', $id_booking) // Filter transaksi berdasarkan ID Booking
            ->get();
    
        // Query untuk mengambil data menu tambahan
        $additional_menu = DB::table('menu')->get();
    
        return view('transaksi', compact('transaksi', 'additional_menu'));
    }
    
    
}
