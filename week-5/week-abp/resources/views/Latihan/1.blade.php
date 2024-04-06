<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan dalam PHP</title>
</head>
<body>
    <h1>Perulangan dalam PHP</h1>

    <?php
    echo "<h2>Ini adalah contoh perulangan for</h2>";
    echo "<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo $i . " ";
    }
    echo "<br><br>";

    echo "<h2>Ini adalah contoh perulangan while</h2>";
    echo "<br>";
    $i = 1;
    while ($i <= 20) {
        echo $i . " ";
        $i += 2;
    }
    echo "<br><br>";

    echo "<h2>Ini adalah contoh perulangan do-while</h2>";
    echo "<br>";
    $i = 1;
    do {
        echo $i . " ";
        $i += 3;
    } while ($i < 30);

    echo "<h3> ini adalah contoh perulangan dalam sebuah string </h3>";
    $text = "Fauzan Almas Saepullah - 1301210558";
    echo "<h4>";
    for ($i = 0; $i < strlen($text); $i++) {
        echo $text[$i] ;
    }
    echo "</h4>";
    ?>
</body>
</html>
