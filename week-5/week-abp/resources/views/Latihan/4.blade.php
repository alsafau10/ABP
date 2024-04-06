<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    
    <form method="GET">
        <label for="angka1">Angka 1:</label>
        <input type="number" id="angka1" name="angka1" value="<?php echo isset($_GET['angka1']) ? $_GET['angka1'] : ''; ?>"><br><br>

        <label for="angka2">Angka 2:</label>
        <input type="number" id="angka2" name="angka2" value="<?php echo isset($_GET['angka2']) ? $_GET['angka2'] : ''; ?>"><br><br>

        <input type="submit" name="tambah" value="Tambah">
        <input type="submit" name="kurang" value="Kurang">
        <input type="submit" name="kali" value="Kali">
        <input type="submit" name="bagi" value="Bagi">
    </form>

    <?php
    if (isset($_GET["tambah"])) {
        $hasil = $_GET["angka1"] + $_GET["angka2"];
        echo "<h2>Hasil: $hasil</h2>";
    } elseif (isset($_GET["kurang"])) {
        $hasil = $_GET["angka1"] - $_GET["angka2"];
        echo "<h2>Hasil: $hasil</h2>";
    } elseif (isset($_GET["kali"])) {
        $hasil = $_GET["angka1"] * $_GET["angka2"];
        echo "<h2>Hasil: $hasil</h2>";
    } elseif (isset($_GET["bagi"])) {
        if ($_GET["angka2"] != 0) {
            $hasil = $_GET["angka1"] / $_GET["angka2"];
            echo "<h2>Hasil: $hasil</h2>";
        } else {
            echo "<h2>Tidak bisa dibagi dengan nol</h2>";
        }
    }
    ?>
</body>
</html>
