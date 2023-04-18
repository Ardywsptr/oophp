<?php

// jualan produk :
// komik dan game

// class
class Produk {
    // property
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $tipe,
            $jmlHalaman,
            $waktuMain;

    // constructor
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga", $tipe = "Tipe", $jmlHalaman = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->tipe = $tipe;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    // method
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function  getInfoLengkap(){
        $str = "{$this->tipe} : {$this->getLabel()} (Rp. {$this->harga})";
        
        if($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam";
        }

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
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, "Komik", 100, 0);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, "Game", 0, 100);
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

// inisiasi inheritance problem
echo "inisiasi inheritance problem :";
echo "<br>";
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();