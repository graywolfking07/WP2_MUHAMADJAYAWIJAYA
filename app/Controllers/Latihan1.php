<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Latihan1 extends BaseController
{
    public function index()
    {
        echo "Selamat Datang... Selamat belajar web programming";
    }

    public function getPenjumlahan(int $n1, int $n2)
    {
        $hasil = model('ModelLatihan1');
        $hasil_jumlah = $hasil->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = ".$hasil_jumlah;
    }
}
