<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pangkat dan Akar</title>
</head>
<body>
    <center>
    <h1>Kalkulator Pangkat dan Akar</h1>
    <form method="get" action="latihan3.php">
        <label for="angka">Masukkan Angka:</label>
        <br>
        <input type="number" id="angka" name="angka" required>
        <br>
        <br>
        <label for="operasi">Pilih Operasi:</label>
        <select id="operasi" name="operasi">
            <option value="pangkat">Pangkat</option>
            <option value="akar">Akar</option>
        </select>
        <br>
        <br>
        <button type="submit" name="hitung">Hitung</button>
    </form> 
    </center>
</body>
</html>