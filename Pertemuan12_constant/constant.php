<?php
echo "Menggunakan define : ";
define("NAMA", "Ardy Wirasaputra");
echo NAMA;

echo "<br>";

echo "Menggunakan const : ";
const UMUR = 24;
echo UMUR;




// jika constant digunakan dalam class -> hanya bisa dengan const
class Coba
{
    const NAMA = "Cici Awalia";
}

echo "<br>";
echo Coba::NAMA;




// magic constant
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __CLASS__;
echo "<br>";
echo __TRAIT__;
echo "<br>";
echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;

// magic constant __FUNCTION__
function coba()
{
    return
        __FUNCTION__;
}
echo coba();

echo "<br>";

// magic constant __CLASS__
class CobaAh
{
    public $kelas = __CLASS__;
}
$obj = new CobaAh();
echo $obj->kelas;
