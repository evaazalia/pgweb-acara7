<!-- menggunakan built-in function -->
<?php
include 'vars.php'; // Memanggil file vars.php

echo "<br>Sebuah $buah $warna"; // akan menampilkan: Sebuah apel hijau
?>

<!-- membuat menggunakan function -->
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
