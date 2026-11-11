<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form POST</title>
</head>
<body>

    <h2>Form Data Mahasiswa</h2>

    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <br><br>

        <label>NIM:</label>
        <input type="text" name="nim" required>

        <br><br>

        <button type="submit">Kirim Data</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST["nama"]);
            $nim = htmlspecialchars($_POST["nim"]);

            echo "<h3>Data Berhasil Dikirim!</h3>";
            echo "Nama: " . $nama . "<br>";
            echo "NIM: " . $nim;
        }
    ?>

</body>
</html>
