<?php
require_once "Merk.php";
$merk = new Merk();
$dataMerk = $merk->getAllMerk();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Merk Kosmetik</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fefefe;
            padding: 40px;
        }
        h2 {
            text-align: center;
            color: #e91e63;
        }
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 20px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #e91e63;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #fce4ec;
        }
    </style>
</head>
<body>
    <h2>Daftar Merk Kosmetik</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Merk</th>
        </tr>
        <?php foreach ($dataMerk as $merk): ?>
        <tr>
            <td><?= $merk['id'] ?></td>
            <td><?= $merk['nama_merk'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
