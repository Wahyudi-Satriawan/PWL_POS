<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan ini agar tidak error

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'stok_id' => $i,
                'barang_id' => $i,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 50,
            ];
        }
        DB::table('t_stok')->insert($data);
    }
}