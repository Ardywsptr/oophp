<?php

// jualan produk :
// komik dan game

// class parent
class Produk {
    // property
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;

    // constructor
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga", $jmlHalaman = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    // method
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function  getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// inheritance
// class child
class Komik extends Produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam";
        return $str;
    }
}

// class
class CetakInfoProduk {
    // object type (Produk) -> mencetak info produk
    // method
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// object
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 100);
$infoProduk1 = new CetakInfoProduk();
$infoProduk2 = new CetakInfoProduk();

// output

// inisiasi method
echo "inisiasi method :";
echo "<br>";
echo "Komik : ".$produk1->getLabel();
echo "<br>";
echo "Game : ".$produk2->getLabel();
echo "<hr>";

// inisiasi object type
echo "inisiasi object type :";
echo "<br>";
echo $infoProduk1->cetak($produk1);
echo "<br>";
echo $infoProduk2->cetak($produk2);
echo "<hr>";

// Komik : Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
// Game : Neil Druckmann, Sony Computer (Rp. 250000) ~ 100 Jam

// inisiasi inheritance problem
echo "inisiasi inheritance problem :";
echo "<br>";
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();