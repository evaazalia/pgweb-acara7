<!-- string -->
<?php 
$teks = "Hallo semuanya, ini latihan ketiga, string!<br><br>"; 
echo $teks; 
?>

<!-- operator penggabungan string -->
<?php 
$teks = "Hallo semuanya!"; 
$teks2= "12345<br><br>"; 
echo $teks . " " .$teks2; 
?>

<!-- mengetahui panjang string -->
 <?php 
echo strlen("Hallo semuanya!<br><br>"); 
?> 

<!-- mencari karakter di dalam string -->
 <?php 
echo strpos("Hallo semuanya!","semua"); 
?> 