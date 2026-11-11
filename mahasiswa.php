<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Mengambil data dari form
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    // Validasi data
    if ($nama === "") {
        $error[] = "Nama wajib diisi.";
    }

    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    }

    if ($prodi === "") {
        $error[] = "Program studi wajib diisi.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    if (
        !ctype_digit((string)$semesterInput) ||
        (int)$semesterInput < 1 ||
        (int)$semesterInput > 14
    ) {
        $error[] = "Semester harus berupa angka 1–14.";
    }

    // Jika tidak ada kesalahan
    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
</head>
<body>

    <h2>Formulir Data Mahasiswa</h2>

    <form method="POST">

        <p>
            Nama:<br>
            <input type="text" name="nama" required>
        </p>

        <p>
            NIM:<br>
            <input type="text" name="nim" required>
        </p>

        <p>
            Program Studi:<br>
            <input type="text" name="prodi" required>
        </p>

        <p>
            Semester:<br>
            <input type="number" name="semester"
                   min="1" max="14" step="1" required>
        </p>

        <p>
            Email:<br>
            <input type="email" name="email" required>
        </p>

        <button type="submit">Kirim Data</button>
        <button type="reset">Reset</button>

    </form>

    <?php if ($error): ?>

        <h3>Terjadi Kesalahan:</h3>
        <ul>
            <?php foreach ($error as $pesan): ?>
                <li><?= htmlspecialchars($pesan) ?></li>
            <?php endforeach; ?>
        </ul>

    <?php elseif ($data): ?>

        <h3>Data Mahasiswa Berhasil Diterima!</h3>

        Nama: <?= htmlspecialchars($data["nama"]) ?><br>
        NIM: <?= htmlspecialchars($data["nim"]) ?><br>
        Program Studi: <?= htmlspecialchars($data["prodi"]) ?><br>
        Semester: <?= $data["semester"] ?><br>
        Email: <?= htmlspecialchars($data["email"]) ?>

    <?php endif; ?>

</body>
</html>
