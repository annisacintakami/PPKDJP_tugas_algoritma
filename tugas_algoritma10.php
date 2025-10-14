<?php
if (isset($_POST['kirim'])) {
    $angka = $_POST['angka'];
    if ($angka > 0) {
        echo "Nilai positif " . $angka;
    } else if ($angka == 0) {
        echo "Nilai nol " . $angka;
    } else {
        echo "Nilai Negatif";
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
        <label for="">Masukan Angka</label>
        <input type="text" name="angka" placeholder="Isi angka" required><br>
        <button type="submit" name="kirim">Kirim</button>

    </form>
</body>

</html>