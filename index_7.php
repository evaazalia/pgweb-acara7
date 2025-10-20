<html>
<body>

#WHILE<br>
<?php 
$i = 1;
while ($i <= 5) {
    echo "Angka " . $i . "<br />";
    $i++;
}
?>

<br>#DO WHILE<br>
<?php 
$i = 0;
do {
    $i++;
    echo "Angka " . $i . "<br />";
} while ($i < 5);
?>

<br>#FOR<br>
<?php 
for ($i = 1; $i <= 5; $i++) {
    echo "Hello World!<br />";
}
?>

<br>#FOREACH<br>
<?php 
$arr = array("satu", "dua", "tiga");
foreach ($arr as $nilai) {
    echo "Nilai: " . $nilai . "<br />";
}
?>

</body>
</html>
