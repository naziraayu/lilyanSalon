<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class RiwayatTransaksiController extends Controller
{
    public function index() {
        $customer = Customer::with(['transaksi' => function ($query) {
            $query->latest();
        }])->get();
        // Mengurutkan pelanggan berdasarkan tanggal transaksi terbaru
        $customer = $customer->sortByDesc(function ($customer) {
            return $customer->transaksi->first()->created_at ?? null;
        });
        //passing posts to view
        return view('riwayatTransaksi', compact('customer'));
        // return view('customer',['data' => ModelsCustomer::all()]);
    }
}
