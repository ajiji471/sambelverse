<?php
$servername = "sql200.infinityfree.com";
$username = "if0_35501040";
$password = "";
$dbname = "if0_35501040_kantin";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
