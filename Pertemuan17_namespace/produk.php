<?php

// jualan produk :
// komik dan game

// dalam pembuatan abstrak ini merupakan keputusan perancangan atau keputusan desain, bukan tentang benar atau salah dalam pembuatan class abstract ini
// jika sudah ada keputusan untuk tidak membuat instansi class produk maka bisa dibuat class abstract produk


// class parent
class Produk
{
    // property
    //visibility private 
    private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon;

    // constructor
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method
    // setter
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    // getter
    public function getJudul()
    {
        return $this->judul;
    }

    // setter
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    // getter
    public function getPenulis()
    {
        return $this->penulis;
    }

    // setter
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    // getter
    public function getPenerbit()
    {
        return $this->penerbit;
    }

    // setter
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    // getter
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // setter
    public function setDiskon($diskon)
    {
        return $this->diskon = $diskon;
    }
    // getter
    public function getDiskon()
    {
        return $this->diskon;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    // method ini yang akan dimodifikasi menjadi method abstract
    public function  getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// inheritance
// class child
class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga", $jmlHalaman = 0)
    {
        // overriding
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        // overriding
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga", $waktuMain = 0)
    {
        // overriding
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        // overriding
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}

// class
class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    // object type (Produk) -> mencetak info class produk
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

// object
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 100);

// output
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
