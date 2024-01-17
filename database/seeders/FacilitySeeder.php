<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fasilitas')->insert([
            [
                'facility_id' => 'RM-1001',
                'nama' => 'Air Conditioner',
                'deskripsi' => 'Air Conditioner yang berfungsi untuk mendinginkan ruangan.',
            ],
            [
                'facility_id' => 'RM-1002',
                'nama' => 'Televisi',
                'deskripsi' => 'Televisi yang dapat digunakan untuk menonton.',
            ],
            [
                'facility_id' => 'RM-1003',
                'nama' => 'Kamar Mandi',
                'deskripsi' => 'Kamar mandi yang dilengkapi dengan toilet, shower, dan wastafel.',
            ],
            [
                'facility_id' => 'RM-1004',
                'nama' => 'Wifi',
                'deskripsi' => 'Wifi yang dapat digunakan untuk mengakses internet.',
            ],
            [
                'facility_id' => 'RM-1005',
                'nama' => 'Kasur',
                'deskripsi' => 'Kasur yang nyaman untuk tidur.',
            ],
            [
                'facility_id' => 'RM-1006',
                'nama' => 'Meja & Kursi',
                'deskripsi' => 'Meja dan kursi yang dapat digunakan untuk bekerja atau bersantai.',
            ],
            [
                'facility_id' => 'RM-1007',
                'nama' => 'Lemari Pakaian',
                'deskripsi' => 'Lemari pakaian yang dapat digunakan untuk menyimpan pakaian.',
            ],
            [
                'facility_id' => 'RM-1008',
                'nama' => 'Kolam Renang',
                'deskripsi' => 'Kolam renang yang dapat digunakan untuk berenang.',
            ],
            [
                'facility_id' => 'RM-1009',
                'nama' => 'Gym',
                'deskripsi' => 'Gym yang dapat digunakan untuk berolahraga.',
            ],
        ]);
    }
}
