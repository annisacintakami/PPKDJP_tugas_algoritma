<?php
if (isset($_POST['kirim'])) {
    $NilaiKilometer = $_POST['NilaiKilometer'];
    $konversi =  $NilaiKilometer * 0.621371;
    echo " Hasil konversi " . $NilaiKilometer . " KM "  . " ke mile = " . $konversi;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Masukan Kilometer</label>
        <input type="text" name="NilaiKilometer" placeholder="Isi kilometer" required><br>
        <button type="submit" name="kirim">Kirim</button>

    </form>
</body>

</html>