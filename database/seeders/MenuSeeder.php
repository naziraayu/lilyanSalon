<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->insert([
            'nama_treatment' => 'Potong',
            'harga' => '20000',
            'deskripsi' => 'Hair Treatment',
            'image' => 'salon.png',
        ]);
    }
}
