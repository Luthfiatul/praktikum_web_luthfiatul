<?php 

$bunga = array(
    "Mawar" => "15000",
    "Melati" => "12000",
    "Anggrek" => "25000",
    "Tulip" => "30000",
    "Lili" => "20000",
    "Kamboja" => "10000",
    "Matahari" => "18000",
    "Bougenville" => "9000"
);

echo "<strong>Tampilan awal array : </strong><br>";
foreach ($bunga as $nama => $harga) {
    echo "$nama harga Rp.$harga <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array ascending berdasarkan value : </strong><br>";
asort($bunga);
foreach ($bunga as $nama => $harga) {
    echo "$nama harga Rp.$harga <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array ascending berdasarkan key: </strong><br>";
ksort($bunga);
foreach ($bunga as $nama => $harga) {
    echo "$nama harga Rp.$harga <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array descending berdasarkan value: </strong><br>";
arsort($bunga);
foreach ($bunga as $nama => $harga) {
    echo "$nama harga Rp.$harga <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array descending berdasarkan key: </strong><br>";
krsort($bunga);
foreach ($bunga as $nama => $harga) {
    echo "$nama harga Rp.$harga <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array descending berdasarkan value: </strong><br>";
rsort($bunga);
foreach ($bunga as $nama => $harga) {
    echo "Harga bunga : Rp.$harga <br>";
}

?>