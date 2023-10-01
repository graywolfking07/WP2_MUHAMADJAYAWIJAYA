<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLatihan1 extends Model
{
   // membuat variable untuk menampung nilai
   public int $nilai1, $nilai2, $hasil;

   public function jumlah(int $n1 = null, int $n2 = null) : int
   {
    $this->nilai1 = $n1;
    $this->nilai2 = $n2;
    $this->hasil = $this->nilai1 + $this->nilai2;
    return $this->hasil;
   }

}
