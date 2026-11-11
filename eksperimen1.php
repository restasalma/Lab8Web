<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rata-rata Nilai</title>
</head>
<body>

    <h2>Menghitung Nilai Rata-rata</h2>

    <form method="POST">
        Nilai Tugas:
        <input type="number" name="tugas" min="0" max="100" required>
        <br><br>

        Nilai UTS:
        <input type="number" name="uts" min="0" max="100" required>
        <br><br>

        Nilai UAS:
        <input type="number" name="uas" min="0" max="100" required>
        <br><br>

        <button type="submit">Hitung Rata-rata</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $tugas = (int) $_POST["tugas"];
        $uts = (int) $_POST["uts"];
        $uas = (int) $_POST["uas"];

        if (
            $tugas < 0 || $tugas > 100 ||
            $uts < 0 || $uts > 100 ||
            $uas < 0 || $uas > 100
        ) {
            echo "<p>Nilai harus antara 0 sampai 100.</p>";
        } else {
            $rata = ($tugas + $uts + $uas) / 3;

            echo "<h3>Hasil Perhitungan</h3>";
            echo "Nilai Tugas: $tugas <br>";
            echo "Nilai UTS: $uts <br>";
            echo "Nilai UAS: $uas <br>";
            echo "Rata-rata: " . number_format($rata, 2);
        }
    }
    ?>

</body>
</html>
