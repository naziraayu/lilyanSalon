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
            [
                'id' => 1,
                'email' => 'john.doe@example.com',
                'no_telp' => '081234567890',
                'nama_lengkap' => 'John Doe',
                'password' => 'password123',
                'pertanyaan_keamanan' => 'Nama ibu kandung?',
                'jawaban' => 'Sarah Doe',
            ],
            [
                'id' => 2,
                'email' => 'jane.smith@example.com',
                'no_telp' => '082345678901',
                'nama_lengkap' => 'Jane Smith',
                'password' => 'password123',
                'pertanyaan_keamanan' => 'Nama hewan peliharaan pertama?',
                'jawaban' => 'Buddy',
            ],
            [
                'id' => 3,
                'email' => 'robert.brown@example.com',
                'no_telp' => '083456789012',
                'nama_lengkap' => 'Robert Brown',
                'password' => 'password123',
                'pertanyaan_keamanan' => 'Kota kelahiran?',
                'jawaban' => 'New York',
            ],
            [
                'id' => 4,
                'email' => 'lisa.white@example.com',
                'no_telp' => '084567890123',
                'nama_lengkap' => 'Lisa White',
                'password' => 'password123',
                'pertanyaan_keamanan' => 'Nama sekolah pertama?',
                'jawaban' => 'SDN 01',
            ],
            [
                'id' => 5,
                'email' => 'david.jones@example.com',
                'no_telp' => '085678901234',
                'nama_lengkap' => 'David Jones',
                'password' => 'password123',
                'pertanyaan_keamanan' => 'Nama teman masa kecil?',
                'jawaban' => 'Michael',
            ],
        ]);
    }
}
