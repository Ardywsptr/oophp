<?php
// abstract class
abstract class Buah
{
    private $warna;

    // interface/method abstract
    abstract public function makan();

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
}

class Apel extends Buah
{
    public function makan()
    {
        // kunyah
        // sampai bagian tengan
    }
}

class Jeruk extends Jeruk
{
    public function makan()
    {
        // kupas
        // kunyah
    }
}
