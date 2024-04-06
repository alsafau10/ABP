<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Cetak Genap dalam PHP</title>
</head>
<body>
    <h1>Fauzan Almas Saepullah - 1301210558</h1>
    <h1>Fungsi Cetak Genap dalam PHP</h1>

    <?php 
    function cetakGenap($awal, $akhir) {
        for ($i = $awal; $i <= $akhir; $i++) {
            if ($i % 2 == 0) {
                echo "$i ";
            }
        }
    }

    // Pemanggilan fungsi
    $a = 10;
    $b = 50;
    echo "Bilangan genap dari $a sampai $b adalah : <br>";
    cetakGenap($a, $b);
    ?>
</body>
</html>
