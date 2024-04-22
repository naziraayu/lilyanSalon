<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customer')->insert([
            'no_telp' => '081231559751',
            'nama_lengkap' => 'Nazira Ayu',
            'password' => '11111111',
            'pertanyaan_keamanan' => 'siapa disana?',
            'jawaban' => 'inijeje',
        ]);
    }
}
