<?php
// Function untuk mengubah angka menjadi format Rupiah
function formatRupiah($angka) {
    return "Rp" . number_format($angka, 0, ",", ".");
}

// Contoh penggunaan function
$harga1 = 150000;
$harga2 = 25000;

echo "<h2>Format Harga Rupiah</h2>";
echo "Harga pertama: " . formatRupiah($harga1) . "<br>";
echo "Harga kedua: " . formatRupiah($harga2);
?>
