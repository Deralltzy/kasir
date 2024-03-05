<?php

namespace Database\Seeders;

use App\Models\BarangDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederBarang extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BarangDetail::insert([
            'id'            =>'1',
            'nama_produk'   =>'susu',
            'harga'         =>'5.000',
            'stok'          =>'1',
        ]);
    }
}
