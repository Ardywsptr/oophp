<?php
// class parent
// class abstract
abstract class Produk
{
    // property
    //visibility private 
    protected $judul,
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

    abstract public function getInfo();
}
