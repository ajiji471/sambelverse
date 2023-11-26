// JavaScript untuk menambah dan mengurangi jumlah
const incrementButtons = document.querySelectorAll('.increment');
const decrementButtons = document.querySelectorAll('.decrement');
const quantitySpans = document.querySelectorAll('.quantity');
const menuPrices = document.querySelectorAll('.menu-price');
const checkboxes = document.querySelectorAll('.menu-checkbox');
const invoiceContent = document.getElementById('invoice-content');
const totalPrice = document.getElementById('total-price');
const purchaseDate = document.getElementById('purchase-date');
const menuModal = document.getElementById('menuModal');
const menuContainer = document.body.querySelector('.invoice')


let total = 0;

incrementButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        const quantity = parseInt(quantitySpans[index].textContent);
        quantitySpans[index].textContent = quantity + 1;
        updateInvoice();
    });
});

decrementButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        const quantity = parseInt(quantitySpans[index].textContent);
        if (quantity > 0) {
            quantitySpans[index].textContent = quantity - 1;
            updateInvoice();
        }
    });
});

checkboxes.forEach((checkbox, index) => {
    checkbox.addEventListener('change', () => {
        updateInvoice();
    });
});
//fungsi update invoice
// function updateInvoice() {
//     total = 0;
//     invoiceContent.textContent = '';
//     const currentDate = new Date().toLocaleDateString();
//     let invoiceText = '';

//     checkboxes.forEach((checkbox, index) => {
//         if (checkbox.checked) {
//             const quantity = parseInt(quantitySpans[index].textContent);
//             const price = parseFloat(menuPrices[index].textContent.replace(',', ''));
//             total += quantity * price;
//             const menuName = document.getElementById(`menu${index + 1}`).textContent;
//             invoiceText += `${menuName} x ${quantity} + `;
//         }
//     });

//     // Hapus tanda '+' ekstra di akhir string
//     invoiceText = invoiceText.slice(0, -2);

//     invoiceContent.textContent = invoiceText;
//     totalPrice.textContent = total.toLocaleString('id-ID');
//     purchaseDate.textContent = currentDate;
// }

// Fungsi untuk membuka modal
function openModal() {
    menuModal.style.display = 'block';
}

// Fungsi untuk menutup modal
function closeModal() {
    menuModal.style.display = 'none';
}

// Fungsi untuk menambahkan card menu baru
function addNewMenu() {
    const nameInput = document.getElementById('menuName');
    // const imageInput = document.getElementById('menuImage'); // Tidak dapat membaca file secara langsung
    const priceInput = document.getElementById('menuPrice');

    const menuName = nameInput.value;
    // const menuImage = imageInput.value; // Tidak dapat membaca file secara langsung
    const menuPrice = priceInput.value;

    if (menuName && menuPrice) {
        // Buat elemen card menu baru
        const newMenuCard = document.createElement('div');
        newMenuCard.className = 'menu-card';

        const newMenuImage = document.createElement('img');
        // Gunakan URL gambar placeholder sementara
        newMenuImage.src = 'placeholder.jpg'; // Ganti dengan URL gambar yang benar
        newMenuImage.alt = `Gambar ${menuName}`;

        const newMenuDetails = document.createElement('div');
        newMenuDetails.className = 'menu-details';

        const newMenuTitle = document.createElement('h3');
        newMenuTitle.textContent = menuName;
        newMenuTitle.id = `menu${document.querySelectorAll('.menu-card').length + 1}`;

        const newMenuPrice = document.createElement('p');
        newMenuPrice.className = 'menu-price';
        newMenuPrice.textContent = menuPrice;

        newMenuDetails.appendChild(newMenuTitle);
        newMenuDetails.appendChild(newMenuPrice);

        const newMenuQuantity = document.createElement('div');
        newMenuQuantity.className = 'menu-quantity';

        const decrementButton = document.createElement('button');
        decrementButton.className = 'decrement';
        decrementButton.textContent = '-';

        const quantitySpan = document.createElement('span');
        quantitySpan.className = 'quantity';
        quantitySpan.textContent = '0';

        const incrementButton = document.createElement('button');
        incrementButton.className = 'increment';
        incrementButton.textContent = '+';

        newMenuQuantity.appendChild(decrementButton);
        newMenuQuantity.appendChild(quantitySpan);
        newMenuQuantity.appendChild(incrementButton);

        const newMenuCheckbox = document.createElement('input');
        newMenuCheckbox.type = 'checkbox';
        newMenuCheckbox.className = 'menu-checkbox';

        newMenuCard.appendChild(newMenuImage);
        newMenuCard.appendChild(newMenuDetails);
        newMenuCard.appendChild(newMenuQuantity);
        newMenuCard.appendChild(newMenuCheckbox);

        // Tambahkan card menu baru ke dalam dokumen
        const menuContainer = document.body.querySelector('.invoice');
        menuContainer.before(newMenuCard);

        // Reset input modal
        nameInput.value = '';
        // imageInput.value = ''; // Tidak dapat membaca file secara langsung
        priceInput.value = '';

        // Tutup modal
        closeModal();

        // Tambahkan event listener untuk card menu baru
        newMenuCard.querySelector('.increment').addEventListener('click', () => {
            const quantity = parseInt(quantitySpan.textContent);
            quantitySpan.textContent = quantity + 1;
            updateInvoice();
        });

        newMenuCard.querySelector('.decrement').addEventListener('click', () => {
            const quantity = parseInt(quantitySpan.textContent);
            if (quantity > 0) {
                quantitySpan.textContent = quantity - 1;
                updateInvoice();
            }
        });

        newMenuCard.querySelector('.menu-checkbox').addEventListener('change', () => {
            updateInvoice();
        });
    }
}
//fungsi update invoice
function updateInvoice() {
    total = 0;
    invoiceContent.textContent = '';
    var currentDate = new Date().toISOString().split('T')[0]; // Mendapatkan tanggal saat ini dalam format YYYY-MM-DD

    // const currentDate = new Date().toLocaleDateString();
    let invoiceText = '';

    checkboxes.forEach((checkbox, index) => {
        if (checkbox.checked) {
            const quantity = parseInt(quantitySpans[index].textContent);
            const price = parseInt(menuPrices[index].textContent);
            // const price = parseFloat(menuPrices[index].textContent);
            // const price = parseFloat(menuPrices[index].textContent.replace(',', ''));
            total += quantity * price;
            const menuName = document.getElementById(`menu${index + 1}`).textContent;
            invoiceText += `${menuName} x ${quantity} + `;
        }
    });

    // Hapus tanda '+' ekstra di akhir string
    invoiceText = invoiceText.slice(0, -2);

    invoiceContent.textContent = invoiceText;
    totalPrice.textContent = total.toLocaleString('id-ID');
    purchaseDate.textContent = currentDate;
}


//----FUNGSI UNTUK KIRIM KE MYSQL


// Rest of your code...


document.getElementById('btnKonfir').addEventListener('click', function () {
    // Mengambil nilai dari input dan elemen lainnya
    var namaPelanggan = document.getElementById('namaPelanggan').value;
    var invoiceContent = document.getElementById('invoice-content').innerHTML;
    var totalPrice = document.getElementById('total-price').innerText;
    var purchaseDate = document.getElementById('purchase-date').innerText;

    // Membuat objek FormData untuk mengirim data ke PHP
    var formData = new FormData();
    formData.append('namaPelanggan', namaPelanggan);
    formData.append('invoiceContent', invoiceContent);
    formData.append('totalPrice', totalPrice);
    formData.append('purchaseDate', purchaseDate);

    // Mengirim data ke server PHP menggunakan AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'proses.php', true);
    xhr.onload = function () {
        // Handle respons dari server jika diperlukan
        console.log(xhr.responseText);
    };
    xhr.send(formData);
});

// function showHeader() {
//     var header = document.getElementById("myHeader");

//     // Tambahkan class 'show' ke header saat pengguna scroll
//     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//       header.style.display = "block";
//     } else {
//       header.style.display = "none";
//     }
//   }

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("header").style.top = "0";
    } else {
        document.getElementById("header").style.top = "-100px";
    }
}

//=========fungsi filter berdasarkan tanggal==========

//   function getOrders() {
//     // Mendapatkan nilai tanggal dari input
//     var purchaseDate = document.getElementById("purchase-date").value;

//     // Melakukan AJAX request ke server PHP
//     var xhr = new XMLHttpRequest();
//     xhr.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             var orders = JSON.parse(this.responseText);
//             displayOrders(orders);
//         }
//     };
//     xhr.open("POST", "get_orders.php", true);
//     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhr.send("purchaseDate=" + purchaseDate);
// }

// function displayOrders(orders) {
//     var invoiceContent = document.getElementById("invoice-content");
//     var totalPrice = 0;

//     // Mengisi div dengan pesanan
//     orders.forEach(function(order) {
//         var orderInfo = "Nama: " + order.nama + ", Harga: " + order.harga;
//         var orderElement = document.createElement("p");
//         orderElement.textContent = orderInfo;
//         invoiceContent.appendChild(orderElement);

//         // Menambahkan harga pesanan ke total
//         totalPrice += parseFloat(order.harga);
//     });

//     // Memperbarui total harga
//     document.getElementById("total-price").textContent = totalPrice;
// }

//======== memunculkan list pesanan ========
//   document.getElementById('btnKonfir').addEventListener('click', function() {
//     var purchaseDate = document.getElementById('purchase-date').innerText;

//     // Kirim data ke server menggunakan XMLHttpRequest
//     var xhr = new XMLHttpRequest();
//     xhr.open('POST', 'get_pesanan.php', true);
//     xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState == 4 && xhr.status == 200) {
//             // Isi div dengan hasil dari server
//             document.getElementById('invoice-content').innerHTML = xhr.responseText;
//         }
//     };
//     xhr.send('purchase_date=' + purchaseDate);
// });

//===== mengantur tgl default per hari ini ====
// document.getElementById('tglPesanan').valueAsDate = new Date();

//==== saat tombol konfirmasi di klik=== halaman me refresh====

// document.addEventListener('DOMContentLoaded', function () {
//     // Menangkap elemen tombol konfirmasi
//     var btnKonfir = document.getElementById('btnKonfir');

//     // Menambahkan event listener untuk klik pada tombol konfirmasi
//     btnKonfir.addEventListener('click', function () {
//         // Merefresh halaman
//         location.reload();
//     });
// });

function loadPage() {
    location.reload();

}