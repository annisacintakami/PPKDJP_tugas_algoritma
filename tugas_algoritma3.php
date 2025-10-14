<?php
if (isset($_POST['kirim'])) {
    $namadepan = $_POST['namadepan'];
    $namatengah = $_POST['namatengah'];
    $namabelakang = $_POST['namabelakang'];

    echo "Nama depan: " . $namadepan  . "<br>";
    echo "Nama tengah: " . $namatengah  . "<br>";
    echo "Nama belakang: " . $namabelakang  . "<br>";
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
        <label for="">Nama depan</label>
        <input type="text" name="namadepan" placeholder="Isi nama depan" required><br>
        <label for="">Nama tengah</label>
        <input type="text" name="namatengah" placeholder="Isi nama tengah" required><br>
        <label for="">Nama belakang</label>
        <input type="text" name="namabelakang" placeholder="Isi nama belanag" required>
        <button type="submit" name="kirim">Kirim</button>

    </form>
</body>

</html>