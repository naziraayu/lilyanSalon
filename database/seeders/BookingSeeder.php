<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('booking')->insert([
            'tanggal' => '2024-09-01',
            'jam' => '12.00 - 13.00',
            'service' => 'Home Service',
            'kecamatan' => 'Sumbersari',
            'alamat' => 'Jln Bengawan Solo',
            'akomodasi' => '20000',
            'status' => 'Belum Bayar',   
            'customer_id' => '4',
            'menu_id' => '7',
        ]);
    }
}
