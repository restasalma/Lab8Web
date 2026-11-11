<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form dengan Tombol Reset</title>
</head>
<body>

<h2>Formulir Data Mahasiswa</h2>

<form method="POST">
    <label>Nama:</label><br>
    <input type="text" name="nama"><br><br>

    <label>NIM:</label><br>
    <input type="text" name="nim"><br><br>

    <label>Program Studi:</label><br>
    <input type="text" name="prodi"><br><br>

    <button type="submit">Kirim</button>
    <button type="reset">Reset</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $nim = htmlspecialchars($_POST["nim"]);
    $prodi = htmlspecialchars($_POST["prodi"]);

    echo "<h3>Data yang Dikirim:</h3>";
    echo "Nama: " . $nama . "<br>";
    echo "NIM: " . $nim . "<br>";
    echo "Program Studi: " . $prodi;
}
?>

</body>
</html>
