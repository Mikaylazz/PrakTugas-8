<?php
include 'database.php';
$db = new Database();

$query = "SELECT * FROM merk";
$result = mysqli_query($db->conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Merk Kosmetik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Merk Kosmetik</h1>
    <ul>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <li><?= $row['nama_merk'] ?></li>
        <?php } ?>
    </ul>
</body>
</html>
