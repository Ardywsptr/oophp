<?php

// jualan produk :
// komik dan game

// class parent
class Produk {
    // property
    //visibility private 
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon;

    // constructor
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method
    // setter
    public function setJudul($judul){
        $this->judul = $judul;
    }
    // getter
    public function getJudul(){
        return $this->judul;
    }

    // setter
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }
    // getter
    public function getPenulis(){
        return $this->penulis;
    }
    
    // setter
    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }
    // getter
    public function getPenerbit(){
        return $this->penerbit;
    }

    // setter
    public function setHarga($harga){
        $this->harga = $harga;
    }
    // getter
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    // setter
    public function setDiskon($diskon){
        return $this->diskon = $diskon;
    }
    // getter
    public function getDiskon(){
        return $this->diskon;
    }

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
echo "inisiasi visibility private diskon :";
echo "<br>";
$produk2->setDiskon(50);
echo "Harga setelah diskon : {$produk1->getHarga()}";
echo "<br>";
$produk2->setDiskon(50);
echo "Harga setelah diskon : {$produk2->getHarga()}";
echo "<hr>";

// getter :
echo "inisiasi visibility private getter :";
echo "<br>";
echo $produk1->getJudul();
echo "<br>";
echo $produk2->getJudul();
echo "<hr>";

// setter :
echo "inisiasi visibility private setter :";
echo "<br>";
// $produk1->judul = "judulBaruKomik";
$produk1->setJudul("judulBaruKomik");
echo $produk1->getJudul();
echo "<br>";
// $produk2->judul = "judulBaruGame";
$produk2->setJudul("judulBaruGame");
echo $produk2->getJudul();
echo "<br>";