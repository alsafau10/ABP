<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling dengan Metode GET</title>
</head>
<body>
    <h1>Form Handling dengan Metode GET</h1>
    
    <form method="GET">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" id="pria" name="jenis_kelamin" value="Pria">
        <label for="pria">Pria</label>
        <input type="radio" id="wanita" name="jenis_kelamin" value="Wanita">
        <label for="wanita">Wanita</label><br><br>

        <label for="hobi">Hobi:</label>
        <input type="checkbox" id="membaca" name="hobi[]" value="Membaca">
        <label for="membaca">Membaca</label>
        <input type="checkbox" id="menulis" name="hobi[]" value="Menulis">
        <label for="menulis">Menulis</label>
        <input type="checkbox" id="berkebun" name="hobi[]" value="Berkebun">
        <label for="berkebun">Berkebun</label><br><br>

        <label for="kota">Kota:</label>
        <select id="kota" name="kota">
            <option value="Jakarta">Jakarta</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Bandung">Bandung</option>
            <option value="Yogyakarta">Yogyakarta</option>
        </select><br><br>

        <input type="submit" name="kirim">
    </form>

    <pre><?php print_r($_GET) ?></pre>
</body>
</html>
