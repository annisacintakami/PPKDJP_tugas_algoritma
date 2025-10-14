
<?php
$NilaiAwal = 75;
$NilaiPerbaikan = 80;

echo "Nilai Awal: $NilaiAwal";
echo ", Nilai Perbaikan: $NilaiPerbaikan <br>";

$SimpanNilai = $NilaiAwal;

$NilaiAwal = $NilaiPerbaikan;
$NilaiPerbaikan = $SimpanNilai;

echo "Setelah Proses: <br>";
echo "Nilai Awal : $NilaiAwal <br>";
echo "Nilai Perbaikan: $NilaiPerbaikan <br>"
?>