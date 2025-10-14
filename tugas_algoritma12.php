<?php
if (isset($_POST['kirim'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $angka3 = $_POST['angka3'];
    if ($angka1 >= $angka2 && $angka1 >= $angka3) {
        echo "Nilai Angka Pertama terbesar yaitu" . $angka1;
    } elseif ($angka2 >= $angka1 && $angka2 >= $angka3) {
        echo "Nilai Angka Kedua terbesar yaitu " . $angka2;
    } else {
        echo "Nilai Angka Ketiga terbesar yaitu " . $angka3;
    }
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
        <label for="">Masukan Angka pertama</label>
        <input type="text" name="angka1" placeholder="Isi angka" required><br>
        <label for="">Masukan Angka kedua</label>
        <input type="text" name="angka2" placeholder="Isi angka" required><br>
        <label for="">Masukan Angka ketiga</label>
        <input type="text" name="angka3" placeholder="Isi angka" required><br>
        <button type="submit" name="kirim">Kirim</button>

    </form>
</body>

</html>