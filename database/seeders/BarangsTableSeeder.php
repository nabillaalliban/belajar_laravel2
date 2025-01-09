<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang' => 'lip balm', 'merk'=>'barrenblis', 'harga'=> 78000],
            ['nama_barang' => 'lip tint', 'merk'=>'barrenblis', 'harga'=> 79000],
            ['nama_barang' => 'Tinted lip balm', 'merk'=>'barrenblis', 'harga'=> 85000],
            ['nama_barang' => 'lip oil', 'merk'=>'barrenblis', 'harga'=> 65000],
            ['nama_barang' => 'lip velvet', 'merk'=>'barrenblis', 'harga'=> 68000]

        ];

        //masukan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
