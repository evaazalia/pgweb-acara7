<?php 
$nama[0] = "Joko"; 
$nama[1] = "Parto"; 
$nama[2] = "Jono"; 
echo $nama[1]." dan ".$nama[2]." adalah tetangga Pak ".$nama[0]; 
?> 

<?php
$umur = array("Joko"=>33, "Parto"=>35, "Jono"=>29);
echo '<pre>';
print_r($umur);
echo '</pre>';
?>

<?php
$keluarga = array 
( 
"Joko"=>array 
( 
"Jojon", 
"Joni", 
"Joana" 
), 
"Parto"=>array 
( 
"Parmi"
),
"Warto"=>array 
( 
"Warman", 
"Warno", 
"Warmin" 
) 
);
echo $keluarga["Joko"][2] ." adalah anggota keluarga Joko";
?>

