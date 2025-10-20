<html> 
<body> 
<?php 
$d=date("D"); 
if ($d=="Sat") 
echo "Selamat berakhir pekan!"; 
else 
echo "Semoga hari anda menyenangkan!"; 
?> 
</body> 
</html>

<html> 
<body> 
<?php 
$d=date("D"); 
if ($d=="Sat") 
echo "Selamat berakhri pekan!"; 
elseif ($d=="Sun") 
echo "Semoga hari Minggu anda menyenangkan!"; 
else 
echo "Semoga hari anda menyenangkan!"; 
?> 
</body> 
</html>

<html> 
<body> 
<?php 
$x = 2; 
switch ($x) 
{ 
case 1: echo "Angka 1"; 
break; 
case 2: echo "Angka 2"; 
break; 
case 3: echo "Angka 3"; 
break; 
default:echo "Bukan angka antara 1 sampai 3"; 
} 
?> 
</body> 
</html>