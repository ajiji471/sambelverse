<?php
include 'koneksi.php'; // Sertakan file koneksi.php

// Ambil data pesanan berdasarkan tanggal pembelian
$query = "SELECT * FROM nama_tabel_pesanan WHERE purchase_date = '$_POST[purchase_date]'";
$result = mysqli_query($koneksi, $query);

// Bangun daftar pesanan dalam bentuk HTML
$output = '';
while ($row = mysqli_fetch_assoc($result)) {
    $output .= '<div class="card">';
    $output .= '<h3>Nama Pelanggan: ' . $row['namaPelanggan'] . '</h3>';
    $output .= '<p>Total Harga: Rp ' . $row['totalHarga'] . '</p>';
    $output .= '<p>Tanggal Pembelian: ' . $row['purchase_date'] . '</p>';
    // Tambahkan elemen lain sesuai kebutuhan
    $output .= '</div>';
}

echo $output;
?>
