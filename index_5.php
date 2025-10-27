<!-- pemilihan kondisi if...else -->
<html> 
<body> 
<?php 
$d = date("D"); 
if ($d == "Sat") 
    echo "Selamat berakhir pekan!<br>"; 
else 
    echo "Semoga hari anda menyenangkan!<br>"; 
?> 
</body> 
</html>

<!-- pemilihan kondisi elseif -->
<html> 
<body> 
<?php 
$d = date("D"); 
if ($d == "Sat") 
    echo "Selamat berakhir pekan!<br>"; 
elseif ($d == "Sun") 
    echo "Semoga hari Minggu anda menyenangkan!<br>"; 
else 
    echo "Semoga hari anda menyenangkan!<br>"; 
?> 
</body> 
</html>

<!-- pemilihan kondisi switch -->
<html> 
<body> 
<?php 
$x = 2; 
switch ($x) { 
    case 1: echo "Angka 1<br>"; break; 
    case 2: echo "Angka 2<br>"; break; 
    case 3: echo "Angka 3<br>"; break; 
    default: echo "Bukan angka antara 1 sampai 3<br>"; 
} 
?> 
</body> 
</html>
