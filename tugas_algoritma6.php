<?php
if (isset($_POST['kirim'])) {
    $UangSendiri = $_POST['UangSendiri'];
    $UangTeman = $_POST['UangTeman'];
    $Hasil = $UangTeman + $UangSendiri;
    echo " Hasil Pejumlahan Uang sendiri " . number_format($UangSendiri, 2, ',', '.') . " dan Uang Teman " . number_format($UangTeman, 2, ',', '.');
    echo " adalah " . number_format($Hasil, 2, ',', '.');
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
        <label for="">Masukan Nilai Uang Sendiri</label>
        <input type="number" name="UangSendiri" placeholder="Isi uang sendiri" required><br>
        <label for="">masukkan Nilai Uang Teman</label>
        <input type="number" name="UangTeman" placeholder="Isi uang teman" required><br>
        <button type="submit" name="kirim">Kirim</button>

    </form>
</body>

</html>
