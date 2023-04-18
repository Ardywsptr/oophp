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

    // constuctor
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method
    public function getLabel(){
        return "$this->judul, $this->penulis";
    }
}

// object
// sekarang bisa mendefinisikan langsung isi dari property di parameter object
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk3 = new Produk();

// output
echo "Komik : ".$produk1->getLabel();
echo "<hr>";
echo "Game : ".$produk2->getLabel();
echo "<hr>";
echo "Game : ".$produk3->getLabel();

