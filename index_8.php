<?php
include 'vars.php';
echo "Sebuah $buah $warna"; // ini akan error kalau vars.php belum dimuat
echo "<br>Sebuah $buah $warna"; // akan menampilkan: Sebuah apel hijau
?>

<html>
<body>
<?php
function tulisNama() {
  echo "<br>Merapi";
}
tulisNama();
?>
</body>
</html>
