<!-- array numerik -->
<?php 
$nama[0] = "epul"; 
$nama[1] = "epal"; 
$nama[2] = "epil"; 
echo $nama[1]." dan ".$nama[2]." adalah tetangga Mpok ".$nama[0]; 
?> 

<!-- array asosiatif -->
<?php
$umur['Joko'] = "33"; 
$umur['Parto'] = "35"; 
$umur['Jono'] = "29";
echo "<br>".$umur['Parto']." dan ".$umur['Jono']." lebih tua dari ".$umur['Joko']; 
?>

<!-- array multidimensi -->
<?php
$keluarga = array(
  "Joko"=>array("Jojon", "Joni", "Joana"),
  "Parto"=>array("Parmi"),
  "Warto"=>array("Warman", "Warno", "Warmin")
);
echo "<br>".$keluarga["Joko"][2]." adalah anggota keluarga Joko";
?>
