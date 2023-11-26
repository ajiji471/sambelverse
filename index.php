<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web App Kantin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PjWgF/+JPdZa5RS6M9My11IOfYho4z60lC5E2I5J5Z9xKa" crossorigin="anonymous">
</head>

<body>

    <header id="header">
        <h2>Sambelverse</h2>
    </header>

    <section onscroll="showHeader()">
        <!-- Your website content goes here -->

        <div class="menu-card">
            <img src="img/nasi.jpg" alt="Gambar Menu 1">
            <div class="menu-details">
                <h3 id="menu1">Nasi</h3>
                <p class="menu-price">3000</p>
            </div>
            <div class="menu-quantity">
                <button class="decrement">-</button>
                <span class="quantity">1</span>
                <button class="increment">+</button>
            </div>
            <input type="checkbox" class="menu-checkbox" checked>
        </div>
        <div class="menu-card">
            <img src="img/geprek_1.jpg" alt="Gambar Menu 1">
            <div class="menu-details">
                <h3 id="menu2">Ayam Geprek</h3>
                <p class="menu-price">10000</p>
            </div>
            <div class="menu-quantity">
                <button class="decrement">-</button>
                <span class="quantity">1</span>
                <button class="increment">+</button>
            </div>
            <input type="checkbox" class="menu-checkbox">
        </div>

        <div class="menu-card">
            <img src="img/ayam_cabe_ijo.jpg" alt="Gambar Menu 2">
            <div class="menu-details">
                <h3 id="menu3">Ayam Cabe Ijo</h3>
                <p class="menu-price">10000</p>
            </div>
            <div class="menu-quantity">
                <button class="decrement">-</button>
                <span class="quantity">1</span>
                <button class="increment">+</button>
            </div>
            <input type="checkbox" class="menu-checkbox">
        </div>




        <div class="menu-card">
            <img src="img/ayam_bawang.jpg" alt="Gambar Menu 1">
            <div class="menu-details">
                <h3 id="menu4">Ayam Bawang</h3>
                <p class="menu-price">10000</p>
            </div>
            <div class="menu-quantity">
                <button class="decrement">-</button>
                <span class="quantity">1</span>
                <button class="increment">+</button>
            </div>
            <input type="checkbox" class="menu-checkbox">
        </div>
        <div class="menu-card">
            <img src="img/salad.jpg" alt="Gambar Menu 1">
            <div class="menu-details">
                <h3 id="menu5">salad buah</h3>
                <p class="menu-price">10000</p>
            </div>
            <div class="menu-quantity">
                <button class="decrement">-</button>
                <span class="quantity">1</span>
                <button class="increment">+</button>
            </div>
            <input type="checkbox" class="menu-checkbox">
        </div>
        <div class="menu-card">
            <img src="img/salad.jpg" alt="Gambar Menu 1">
            <div class="menu-details">
                <h3 id="menu6">rujak buah</h3>
                <p class="menu-price">10000</p>
            </div>
            <div class="menu-quantity">
                <button class="decrement">-</button>
                <span class="quantity">1</span>
                <button class="increment">+</button>
            </div>
            <input type="checkbox" class="menu-checkbox">
        </div>


        <!-- Tambahkan card lainnya sesuai dengan menu yang Anda inginkan -->
        <!-- <button onclick="openModal()">Tambah Menu Baru</button>
    <button type="button" onclick="updateInvoice()">update</button> -->

        <!-- untuk invoice -->
        <!--  <div class="invoice">
        <h2>Invoice</h2>
        <label>Nama</label>
        <input type="nama" name="namaPelanggan"required>
        <div id="invoice-content"></div>
        
        <p>Total Harga: Rp <span id="total-price">0</span></p>
        <p>Tanggal Pembelian: <span id="purchase-date"></span></p> -->
        <!-- button pesanan -->
        <!-- <button id="btnKonfir" class="btnKonfir" type="button">Konfirmasi</button>
    </div> -->

        <!-- UNTUK INVOICE KE MYSQL -->

        <div class="invoice">
            <h2>Invoice</h2>
            <label>Nama</label>
            <input type="text" name="namaPelanggan" id="namaPelanggan" required>
            <div id="invoice-content"></div>

            <p>Total Harga: Rp <span id="total-price">0</span></p>
            <p>Tanggal Pembelian: <span id="purchase-date"></span></p>
            <!-- button pesanan -->
            <button id="btnKonfir" class="btnKonfir" type="button" onclick="loadPage();">Konfirmasi</button>

        </div>
        <!-- gambar anime -->

        <img src="img/chibi.png" class="anime">

        <!-- Modal untuk menambahkan card menu baru -->
        <!-- <div id="menuModal" class="modal">
        <div class="modal-content">
            <span class="close-button" onclick="closeModal()">&times;</span>
            <h2>Tambah Menu Baru</h2>
            <form id="menuForm">
                <label for="menuName">Nama Menu:</label>
                <input type="text" id="menuName" required>
                <br> -->
        <!-- Sementara, tidak dapat membaca file secara langsung di HTML/JS di browser -->
        <!-- <label for="menuImage">Gambar Menu:</label>
                <input type="file" id="menuImage" accept="image/*" required>
                <br> -->
        <!-- <label for="menuPrice">Harga (Rp):</label>
                <input type="number" id="menuPrice" required>
                <br>
                <button type="button" onclick="addNewMenu()">Tambahkan</button>

            </form>
        </div>
    </div> -->

        <!-- div pop up pesanan -->
        <!-- <div id="pesananModal" class="pesanan-card"> -->
        <!-- <span class="close-button" onclick="closeModal()">&times;</span> -->
        <!-- <h2>Konfirmasi Pesanan</h2><br> -->
        <!-- <form id="pelanggan"> -->
        <!-- <label>Nama:</label> -->
        <!-- <input type="text" id="namaPelanggan" required> -->
        <!-- <br> -->
        <!-- <button id="btnKonfir" class="btnPop" type="button" onclick="getOrders()">Konfirmasi</button> -->
        <!-- </form> -->
        <!-- </div> -->

        <div class="listOrder">

            <!-- Formulir Filter Tanggal -->
            <form action="" method="post">
                <label for="selected_date">Pilih Tanggal:</label>
                <input type="date" id="selected_date" name="selected_date">

                <input type="submit" value="Filter">
            </form>

            <?php
            // Sertakan file koneksi.php
            include 'koneksi.php';

            // Periksa apakah formulir dikirimkan
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $selected_date = $_POST["selected_date"];

                // Menghitung tanggal awal dan akhir berdasarkan tanggal yang dipilih
                $start_date = $selected_date;
                $end_date = date('Y-m-d', strtotime($selected_date . ' + 1 day'));

                // Query data dari database dengan filter tanggal
                $sql = "SELECT `id`, `nama_pelanggan`, `invoice_content`, `total_price`, `purchase_date` FROM `invoices` WHERE `purchase_date` BETWEEN '$start_date' AND '$end_date'";
            } else {
                // Jika formulir belum dikirimkan, ambil semua data
                $sql = "SELECT `id`, `nama_pelanggan`, `invoice_content`, `total_price`, `purchase_date` FROM `invoices`";
            }

            $result = $conn->query($sql);

            // Mengecek apakah hasil query tidak kosong
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Nama</th><th>List Pesanan</th><th>Total Harga</th></tr>";

                // Output data dari setiap baris
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["nama_pelanggan"] . "</td><td>" . $row["invoice_content"] . "</td><td>Rp." . $row["total_price"] . "</td></tr>";
                }

                echo "</table>";
            } else {
                echo "Tidak ada data";
            }

            // Menutup koneksi
            $conn->close();
            ?>

        </div>

        <div class="footer" id="footer"> &copy;Sambelverse ver.1 by.Ajiji</br>
            <span>Terima Pesanan Kathering hub:
                    <i class="fas fa-heart"></i>
                    <p>0856 9530 1781</p>
            </span>
        </div>

    </section>

    <script src="script.js">

    </script>
</body>

</html>