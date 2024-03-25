<?php
include 'koneksi.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data User</title>
</head>

<body>
    <h2>Data User</h2>
    <div style="margin-bottom: 10px;">
        <a href="tambah.php">Tambah Data</a>
        <a href="cetak.php" style="margin-left:5px;" target="_blank">Cetak Pdf</a>
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>SK Pengangkatan</th>
            <th>Aksi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["nip"] . "</td>";
                echo "<td>" . $row["sk_pengangkatan"] . "</td>";
                echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> - <a href='hapus.php?id=" . $row["id"] . "'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</body>

</html>
