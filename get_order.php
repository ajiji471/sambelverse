<?php
include 'koneksi.php';

// Mendapatkan nilai tanggal dari parameter POST
$purchaseDate = $_POST['purchaseDate'];

// Query untuk mendapatkan pesanan berdasarkan tanggal pembelian
$sql = "SELECT * FROM nama_tabel_pesanan WHERE purchase_date = '$purchaseDate'";
$result = $conn->query($sql);

// Menghasilkan output dalam format JSON
$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);

// Menutup koneksi ke database
$conn->close();
?>
