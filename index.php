<?php

echo "Hello World! <br><br>";

$nama = "Hildan Agussandi";
$umur = 21;

echo "Nama saya $nama, saya berusia $umur Tahun.<br>";

$namaAdik = "Nazwa";
$umurAdik = "17";

echo "Nama adik saya adalah $namaAdik, adik saya berusia $umurAdik Tahun.<br>";

$selisihumur = $umur - $umurAdik;

echo "Selisih usia saya dengan adik saya adalah $selisihumur tahun.<br><br>";

echo "Perulangan <br><br>";

$nom = 20;
for ($i=0; $i<$nom; $i++){
    $n = $i + 1;
    echo $n." ". $nama."<br/>";
}

echo "<br/> Do-While <br><br>";

$no = 5;
$i = 0;

do {
    $n = $i + 1;
    echo $n." ". $nama."<br/>";
    $i++;
} while ($i < $no)

?>