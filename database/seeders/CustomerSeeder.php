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
            'nama_lengkap' => 'Ananta',
            'password' => '22222222',
            'pertanyaan_keamanan' => 'siapa disana?',
            'jawaban' => 'inijaja',
        ]);
    }
}
