<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksi')->insert([
            'id' => '1',
            // 'tambah_menu' => 'Potong Rambut',
            // 'grand_total' => '5000',
            // 'kembalian' => '2000',
            // 'bayar' => '5000',
            // 'id_menu' => '1',
            // 'id_booking' => '2',
        ]);
    }
}
