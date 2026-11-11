<?php
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = trim($_POST["nim"]);

    if (!preg_match("/^[0-9]{10}$/", $nim)) {
        $pesan = "NIM harus terdiri dari 10 angka!";
    } else {
        $pesan = "NIM valid. NIM yang dimasukkan: " . htmlspecialchars($nim);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi NIM</title>
</head>
<body>

<h2>Form Validasi NIM</h2>

<form method="POST">
    <label>Masukkan NIM:</label>
    <input type="text" name="nim" required>
    <button type="submit">Periksa NIM</button>
</form>

<p><?php echo $pesan; ?></p>

</body>
</html>
