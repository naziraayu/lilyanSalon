<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\DetailTransaksi;
use App\Services\TransaksiService;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function coba(){
        // Mendapatkan semua data transaksi
        $data = Transaksi::all();
        
        // Mengirim data transaksi ke view transaksi
        return view('transaksi');
    }
    public function index($id){
    // Mendapatkan semua data transaksi dengan melakukan join antara tabel booking, menu, dan customer
    $data = Booking::select('booking.*', 'menu.nama_treatment','menu.harga', 'customer.nama_lengkap')
                ->join('menu', 'booking.menu_id', '=', 'menu.id')
                ->join('customer', 'booking.customer_id', '=', 'customer.id')
                ->where('booking.id', $id) // Menambahkan kondisi where untuk memfilter berdasarkan id
                ->get();

                $data_menu = Menu::all();
    
    // Mengirim data transaksi ke view transaksi
    return view('transaksi', compact('data','data_menu'));
    }


    public function getHarga(Request $request) {
        $namaTreatment = $request->input('nama_treatment');
    
        // Cari harga dari menu berdasarkan nama treatment
        $menu = Menu::where('nama_treatment', $namaTreatment)->first();
    
        // Jika menu ditemukan, kembalikan harga
        if ($menu) {
            return response()->json(['harga' => $menu->harga]);
        } else {
            return response()->json(['harga' => null]);
        }
    }

    public function bayarTransaksi(Request $request)
    {
        $request->validate([
            'id_transaksi' => 'required|unique:transaksi,id_transaksi',
            'booking_id' => 'required|exists:booking,id',
            'tambah_menu' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'bayar' => 'required|numeric|min:0', 
        ]);
    
        // Ambil harga dasar dari booking
        $booking = Booking::with('menu')->find($request->booking_id);
    
        if (!$booking) {
            return back()->withErrors(['error' => 'Booking tidak ditemukan.']);
        }
    
        $basePrice = $booking->menu ? $booking->menu->harga : 0;
        $akomodasi = $booking->akomodasi ? $booking->akomodasi : 0;
    
        // Hitung total harga
        $harga = $basePrice + $akomodasi;
        if ($request->has('tambah_menu') && !empty($request->tambah_menu)) {
            $menuData = explode('|', $request->tambah_menu);
            if (count($menuData) >= 2) {
                $harga += (float)$menuData[1];
            }
        }
    
        // Hitung kembalian
        $bayar = (float) $request->input('bayar');
        $kembalian = $bayar > $harga ? $bayar - $harga : 0;
    
        DB::transaction(function () use ($request, $harga, $kembalian, $booking) {
            // Simpan data ke tabel transaksi
            $transaksi = Transaksi::create([
                'id_transaksi' => $request->id_transaksi,
                'grand_total' => $harga,
                'bayar' => $request->bayar,
                'kembalian' => $kembalian,
                'booking_id' => $request->booking_id,
                'menu_id' => $request->menu_id,
                'customer_id' => $request->customer_id,
            ]);
    
            // Simpan data ke tabel detail_transaksi jika ada tambahan menu
            if ($request->has('tambah_menu') && !empty($request->tambah_menu)) {
                $menuData = explode('|', $request->tambah_menu);
                if (count($menuData) >= 2) {
                    $menu_id = $menuData[0];
                    $harga = $menuData[1];
                    $nama_treatment = $menuData[2];
    
                    DetailTransaksi::create([
                        'transaksi_id' => $transaksi->id_transaksi,
                        'menu_id' => $menu_id,
                        'nama_treatment' => $nama_treatment,
                        'harga' => $harga,
                    ]);
                }
            }
            
        });

        // Update status booking menjadi "Sudah bayar"
        $booking->status = 'Sudah bayar';
        $booking->save();
    
        return redirect()->route('riwayatTransaksi')->with('success', 'Transaksi berhasil disimpan!');
    }
    public function riwayatTransaksi()
    {
        // Ambil data transaksi dari tabel dengan join ke tabel customer
        $transaksi = DB::table('transaksi')
                        ->select('transaksi.*', 'customer.nama_lengkap', 'menu.nama_treatment', 'menu.harga', 'menu.image', 'booking.tanggal', 'booking.jam', 'booking.akomodasi')
                        ->join('customer', 'transaksi.customer_id', '=', 'customer.id')
                        ->join('menu', 'transaksi.menu_id', '=', 'menu.id')
                        ->join('booking', 'transaksi.booking_id', '=', 'booking.id')
                        ->get();

        // Ambil detail transaksi untuk setiap transaksi
        foreach ($transaksi as $key => $transaksis) {
        $detailTransaksi = DB::table('detail_transaksi')
                            ->where('transaksi_id', $transaksis->id_transaksi)
                            ->get();

        // Tambahkan detail transaksi ke dalam array transaksi
        $transaksis->detail = $detailTransaksi;
        }

        // Tampilkan view riwayatTransaksi dengan data transaksi
        return view('riwayatTransaksi', ['transaksi' => $transaksi]);
    }
    // public function show(){
    
    // // Mengambil data transaksi dari database
    // $transaksi = Transaksi::all();

    // // Mengirim data transaksi ke view riwayat transaksi
    // return view('riwayatTransaksi', compact('transaksi'));
    // }
}

