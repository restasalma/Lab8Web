<?php
    // Function menghitung diskon
    function hitungDiskon($harga, $persen) {
        $potongan = $harga * ($persen / 100);
        return $harga - $potongan;
    }

    $hargaAkhir = hitungDiskon(150000, 10);

    echo "Harga setelah diskon: Rp" .
         number_format($hargaAkhir, 0, ",", ".");

    // Function menghitung luas persegi panjang
    function hitungLuas($panjang, $lebar) {
        return $panjang * $lebar;
    }

    $luas = hitungLuas(10, 5);

    echo "<br>Luas persegi panjang: " . $luas . " cm2";
?>
