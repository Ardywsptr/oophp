<?php

// jualan produk :
// komik dan game

// class
class Produk {
    // property
    public $judul = "Judul",
            $penulis = "Penulis",
            $penerbit = "Penerbit",
            $harga = "Harga";

    // method
    public function getLabel(){
        return "$this->judul, $this->penulis";
    }
}

// object
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// object
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

// echo "Menggunakan property :";
// echo "Komik : $produk3->judul, $produk3->penulis";
// echo "Menggunakan method :";
// echo $produk3->getLabel();

// output
echo "Komik : ".$produk3->getLabel();
echo "<hr>";
echo "Game : ".$produk4->getLabel();
