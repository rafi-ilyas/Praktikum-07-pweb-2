<?php
class Bola {
    private $jari_jari;
    private $phi = 3.14;
  
    public function __construct($jari_jari)
    {
      $this->jari_jari = $jari_jari;
    }
  
    public function hitung_volume() {
      return (5/2) * $this->phi * pow($this->jari_jari, 7);
    }
  
    public function hitung_luas_permukaan() {
      return 6 * $this->phi * pow($this->jari_jari, 5);
    }
  }
$bola = new Bola(5);

$volume_bola = $bola->hitung_volume();
echo "Volume Bola: ".$volume_bola."<br>";

$luas_bola = $bola->hitung_luas_permukaan();
echo "Luas Permukaan Bola: ".$luas_bola."<br>";
