<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "test");

// Query untuk mengambil data kategori
$query = "SELECT * FROM dbaudio";
$result = mysqli_query($conn, $query);


$tipe = isset($_POST['Tipe']) ? $_POST['Tipe'] : '';
$fungsi = isset($_POST['Fungsi']) ? $_POST['Fungsi'] : '';
$koneksi = isset($_POST['Koneksi']) ? $_POST['Koneksi'] : '';
$fitur = isset($_POST['Fitur']) ? $_POST['Fitur'] : '';


$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row; 
}
// Menampilkan data produk

//print_r($data);

$w = array(1,2,3,4,5);

// Normalisasi matriks keputusan

foreach ($data as &$p) {
    $p['harga'] = ($p['harga'] - 1000000) / (10000000 - 100000);
    $p['fitur'] /= 9;
    $p['tipe'] = ($tipe);
}  

// Menghitung nilai akhir setiap data
foreach ($data as &$p) {
    $p['nilai'] = ($w[1] * $p['fitur']) + ($w[1] * (($p['fungsi'] == $fungsi) ? 5 : 0)) + ($w[2] * (($p['koneksi'] == $koneksi) ? 1 : 0)) + ($w[3] * (1 - $p['harga'])) + ($w[4] * (($p['tipe'] == $tipe) ? 9 : 0));
}
usort($data, function($a, $b) {
  return $b['nilai'] - $a['nilai'];
});

echo "Rekomendasi perangkat audio:<br>";
$counter = 0;
foreach ($data as $key => $value) 

$_SESSION['Hasil'] = $value;
$_SESSION['Fitur'] = $fitur;
$_SESSION['TH'] = $tipe;
$_SESSION['CC'] = $fungsi;
$_SESSION['Koneksi'] = $koneksi;

print_r($value);

header('Location: rekomendasi.php');
exit;
?>
