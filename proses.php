<?php
// Ambil data dari form
$namaPelanggan = $_POST['namaPelanggan'];
$invoiceContent = $_POST['invoiceContent'];

// Ubah format angka pada $totalPrice
$totalPrice = $_POST['totalPrice'];
$totalPrice = str_replace('.', '', $totalPrice); // Hilangkan koma
$totalPrice = floatval($totalPrice); // Ubah menjadi float

$purchaseDate = $_POST['purchaseDate'];
// $purchaseDate = date('YYYY-MM-DD', strtotime($purchaseDate));

// Lakukan operasi database atau penyimpanan data sesuai kebutuhan Anda
// Contoh: Simpan data ke database MySQL
$koneksi = mysqli_connect("localhost", "root", "", "kantin");

// Check database connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "INSERT INTO invoices (nama_pelanggan, invoice_content, total_price, purchase_date) VALUES ('$namaPelanggan', '$invoiceContent', $totalPrice, '$purchaseDate')";

// Execute the query and check for errors
if (mysqli_query($koneksi, $query)) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Close the database connection
mysqli_close($koneksi);

?>


