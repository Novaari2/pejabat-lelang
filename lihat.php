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
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a></td>";
                echo "<td><a href='hapus.php?id=" . $row["id"] . "'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</body>

</html>
