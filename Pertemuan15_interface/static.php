<?php

// konsep oop dengan static keyword
class ContohStatic
{
    public static $angka = 1;

    public static function hallo()
    {
        return "hallo " . self::$angka++ . " kali";
    }
}

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::hallo();
// echo "<hr>";
// echo ContohStatic::hallo();


// konsep oop biasa
// nilai selalu berubah menjadi default ketika object di-instansiasi berulang
class Contoh
{
    public $angka = 1;

    public function halo()
    {
        return "halo " . $this->angka++ . " kali <br>";
    }
}

// konsep oop static
// nilai akan selalu tetap berjalan ketika object di-instansiasi berulang
class Contoh2
{
    public static $angka2 = 1;

    public function halo2()
    {
        return "halo " . self::$angka2++ . " kali <br>";
    }
}

echo "oop biasa :";
echo "<br><br>";

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

$obj2 = new Contoh;
echo "<br>";
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

echo "<hr>";

echo "oop static :";
echo "<br><br>";

$obj3 = new Contoh2;
echo $obj3->halo2();
echo $obj3->halo2();
echo $obj3->halo2();

$obj4 = new Contoh2;
echo "<br>";
echo $obj4->halo2();
echo $obj4->halo2();
echo $obj4->halo2();
