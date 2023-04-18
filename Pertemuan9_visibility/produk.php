<?php

// jualan produk :
// komik dan game

// class parent
class Produk {
    // property
    public $judul,
            $penulis,
            $penerbit;

    // visibility protected
    protected $diskon;

    //visibility private 
    private $harga;

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

    // method untuk mengakses harga yang visibilty nya private -> hanya di gunakan pada class itu sendiri -> tidak dengan turunan
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function  getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// inheritance
// class child
class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga", $jmlHalaman = 0){
        // overriding
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        // overriding
        $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga", $waktuMain = 0){
        // overriding
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    // method untuk mengakses diskon yang visibilty nya protect yang hanya ingin di gunakan pada child class game
    public function setDiskon($diskon){
        return $this->diskon = $diskon;
    }

    public function getInfoProduk(){
        // overriding
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam";
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
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 100);
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

// inisiasi object type -> ERROR
// echo "inisiasi object type :";
// echo "<br>";
// echo $infoProduk1->cetak($produk1);
// echo "<br>";
// echo $infoProduk2->cetak($produk2);
// echo "<hr>";

// Komik : Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
// Game : Neil Druckmann, Sony Computer (Rp. 250000) ~ 100 Jam

// inisiasi inheritance 
echo "inisiasi inheritance :";
echo "<br>";
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

// celah dari visibilty public yaitu bisa merubah isi dari instance yang sudah di set
// $produk2->harga = 10000;
// echo $produk2->harga;

// inisiasi visibility private
echo "inisiasi visibility private :";
echo "<br>";
echo "Harga asli : {$produk1->getHarga()}";
echo "<br>";
echo "Harga asli : {$produk2->getHarga()}";
echo "<hr>";

// inisiasi visibility protected
echo "inisiasi visibility protected diskon game :";
echo "<br>";
$produk2->setDiskon(50);
echo "Harga setelah diskon : {$produk2->getHarga()}";
