
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengolahan Data Barang</title>
</head>
<body>

    <h2>Form Transaksi Barang</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $barang = trim($_POST["barang"] ?? "");
        $hargaInput = $_POST["harga"] ?? "";
        $jumlahInput = $_POST["jumlah"] ?? "";

        // Validasi data
        if (
            $barang === "" ||
            !is_numeric($hargaInput) ||
            !ctype_digit((string)$jumlahInput) ||
            (float)$hargaInput < 0 ||
            (int)$jumlahInput < 1
        ) {
            $error = "Periksa kembali nama barang, harga, dan jumlah.";
        } else {
            // Menghitung subtotal
            $harga = (float)$hargaInput;
            $jumlah = (int)$jumlahInput;
            $subtotal = $harga * $jumlah;
        }
    }
    ?>

    <form method="POST">
        <p>
            <label>Nama barang:</label><br>
            <input type="text" name="barang" required>
        </p>

        <p>
            <label>Harga:</label><br>
            <input type="number" name="harga"
                   min="0" step="0.01" required>
        </p>

        <p>
            <label>Jumlah:</label><br>
            <input type="number" name="jumlah"
                   min="1" step="1" required>
        </p>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if (isset($error)) {
        echo "<p>" . htmlspecialchars($error) . "</p>";
    } elseif (isset($subtotal, $barang)) {
        echo "<h3>Ringkasan Transaksi</h3>";
        echo "<p>Barang: " . htmlspecialchars($barang) . "</p>";
        echo "<p>Subtotal: Rp" .
             number_format($subtotal, 0, ",", ".") . "</p>";
    }
    ?>

</body>
</html>
