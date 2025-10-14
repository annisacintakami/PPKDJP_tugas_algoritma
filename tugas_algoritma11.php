<?php
if (isset($_POST['kirim'])) {
    $angka = $_POST['angka'];
    if ($angka % 2  == 0) {
        echo "Nilai True Genap yaitu " . $angka;
    } else {
        echo "Nilai False Ganjil " . $angka;
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