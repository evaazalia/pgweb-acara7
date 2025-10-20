<?php
// Daftar kecamatan di Sleman
$kecamatan = [
    "Berbah",
    "Cangkringan",
    "Depok",
    "Gamping",
    "Godean",
    "Kalasan",
    "Minggir",
    "Mlati",
    "Moyudan",
    "Ngaglik",
    "Ngemplak",
    "Pakem",
    "Prambanan",
    "Seyegan",
    "Sleman",
    "Tempel",
    "Turi"
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kecamatan yang ada di Sleman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f0f8ff; /* biru muda lembut */
            color: #003366;
        }

        h2 {
            color: #0047ab;
            margin-bottom: 20px;
            text-align: left;
        }

        table {
            width: 40%;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0 2px 6px rgba(0,0,50,0.1);
            table-layout: auto; /* penting agar lebar menyesuaikan isi */
            width: auto; /* biar tabel nyesuaiin konten */
        }

        th, td {
            border: 1px solid #b0c4de;
            padding: 6px 10px;
            text-align: left; /* teks rata kiri */
        }

        th {
            background-color: #1e90ff; /* biru terang */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #e6f0ff; /* baris biru muda */
        }

    </style>
</head>
<body>

<table>
    <tr>
        <th>No</th>
        <th>Nama Kecamatan</th>
    </tr>

    <?php
    $no = 1;
    foreach ($kecamatan as $nama) {
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>$nama</td>";
        echo "</tr>";
        $no++;
    }
    ?>
</table>

</body>
</html>
