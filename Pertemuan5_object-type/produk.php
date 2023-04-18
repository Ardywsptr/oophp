<?php

// jualan produk :
// komik dan game

// class
class Produk {
    // property
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    // constructor
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// object type menggunakan class baru
// mencetak info lengkap dari produk
class CetakInfoProduk {
    public function cetak(Produk $produk){
        // $str = "Naruto | Mashasi Kishimoto, Shonen Jump (Rp. 30000)";
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

        return $str;
        
    }
}

// object
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

// output
echo "Komik : ".$produk1->getLabel();
echo "<br>";
echo "Game : ".$produk2->getLabel();
echo "<hr>";

// inisiasi object type
// mencetak info lengkap dari produk1
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "<br>";
$infoProduk2 = new CetakInfoProduk();
echo $infoProduk2->cetak($produk2);

