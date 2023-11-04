<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kalkulasi</title>
</head>
<body>
    <center>
    <h1>Hasil Kalkulasi</h1>

    <?php
    if(isset($_GET['hitung'])) {
        $angka = $_GET['angka'];
        $operasi = $_GET['operasi'];

        if ($operasi == 'pangkat') {
            $hasil = pow($angka, 2);
            echo "Pangkat dua dari $angka adalah $hasil.";
        } elseif ($operasi == 'akar') {
            $hasil = sqrt($angka);
            echo "Akar dari $angka adalah $hasil.";
        }
    } else {
        echo "Silakan isi angka pada kalkulator terlebih dahulu.";
    }
    ?>

    <br>
    </center>
</body>
</html>