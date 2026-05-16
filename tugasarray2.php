<?php

#fungsi array 1: array_search
echo "<strong>Fungsi 1 array_search (mencari nilai array yang ingin kita cari menghasilkan nilai posisi index) : </strong> <br>";

echo "Nama bunga : <br>";
$bunga = array("Mawar", "Melati", "Anggrek", "Tulip", "Lili");

foreach ($bunga as $value) {
    echo "$value<br>";
}

$cari = array_search("Anggrek", $bunga);
echo "Bunga Anggrek ada di index: " . $cari;

$cari = array_search("Tulip", $bunga);
echo "<br>Bunga Tulip ada di index: " . $cari;

echo "<br><br>";

#fungsi array 2: array_slice
echo "<strong>Fungsi 2 array_slice (memotong nilai array yang ingin kita tampilkan) : </strong> <br>";

$harga_bunga = [10000, 15000, 20000, 25000, 30000, 35000, 40000, 45000];

echo "Array sebelum array_slice : <br>";
foreach ($harga_bunga as $value) {
    echo "$value ";
}

$ambil_array = array_slice($harga_bunga, 2 ,3);

echo "<br>Array setelah array_slice : <br>";
foreach ($ambil_array as $value) {
    echo "$value ";
}

echo "<br><br>";

#fungsi array 3: array_splice
echo "<strong>Fungsi 3 array_splice (mengganti nilai array yang kita inginkan) : </strong> <br>";

$stok_bunga = [5, 10, 15, 20, 25];

echo "Array sebelum array_splice : <br>";
foreach ($stok_bunga as $value) {
    echo "$value ";
}

echo "<br>Array setelah array_splice : <br>";

array_splice($stok_bunga, 1, 1, 50);

foreach ($stok_bunga as $value) {
    echo "$value ";
}

echo "<br><br>";

#fungsi array 4: array_unique
echo "<strong>Fungsi 4 array_unique (menghapus nilai array yang duplikat) : </strong> <br>";

$array_duplikat = ["Mawar", "Melati", "Mawar", "Tulip", "Anggrek", "Tulip"];

echo "Array sebelum array_unique : <br>";
foreach ($array_duplikat as $value) {
    echo "$value ";
}

echo "<br>Array setelah array_unique : <br>";

$nilai_unik = array_unique($array_duplikat);

foreach ($nilai_unik as $value) {
    echo "$value ";
}

echo "<br><br>";

#fungsi array 5: array_values
echo "<strong>Fungsi 5 array_values (mengambil nilai value array tanpa menampilkan key) : </strong> <br>";

$array_val = [
    "Bunga1" => "Mawar",
    "Bunga2" => "Melati",
    "Bunga3" => "Anggrek",
    "Bunga4" => "Tulip"
];

echo "Array sebelum array_values : <br>";

foreach ($array_val as $key => $value) {
    echo "$key => $value <br>";
}

$nilai = array_values($array_val);

echo "<br>Array setelah array_values : <br>";

foreach ($nilai as $value) {
    echo "$value <br>";
}

?>