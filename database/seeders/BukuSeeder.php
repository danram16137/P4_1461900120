<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buk = new Buku();
        $buk->judul = "Daskomputasi2";
        $buk->tahun_terbit ="2020";
        $buk->save();


    }
}
