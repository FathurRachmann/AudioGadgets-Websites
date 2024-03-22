<?php
$conn = mysqli_connect("localhost", "root", "", "test");
// Ambil nilai ID dari URL
$id = $_GET['id'];

// Kueri ke database untuk mengambil data yang sesuai
$query = "SELECT * FROM dbaudio WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

// Tampilkan detail data dalam HTML
echo "<h1>Detail Data</h1>";
echo "<p>ID: " . $data['id'] . "</p>";
echo "<p>Nama: " . $data['brand'] . "</p>";
echo "<p>Email: " . $data['tipe'] . "</p>";
// Tambahkan detail data lainnya sesuai kebutuhan
?>
