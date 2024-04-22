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
            'jam' => '11.00',
            'no_telepon_id' => '081231559751',
        ]);
    }
}
