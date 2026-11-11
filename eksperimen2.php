<?php
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eka"];

$hasil = "";

if (isset($_GET["nama"])) {
    $cari = trim($_GET["nama"]);

    foreach ($mahasiswa as $nama) {
        if (strtolower($nama) === strtolower($cari)) {
            $hasil = $nama;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Mahasiswa</title>
</head>
<body>

    <h2>Pencarian Nama Mahasiswa</h2>

    <form method="GET">
        <label>Masukkan nama:</label>
        <input type="text" name="nama" required>
        <button type="submit">Cari</button>
    </form>

    <?php
    if (isset($_GET["nama"])) {
        if ($hasil !== "") {
            echo "<p>Nama ditemukan: " .
                 htmlspecialchars($hasil) . "</p>";
        } else {
            echo "<p>Nama tidak ditemukan.</p>";
        }
    }
    ?>

</body>
</html>
