<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nama'];
    $nip = $_POST['nip'];
    $sk_pengangkatan = $_POST['sk_pengangkatan'];

    $sql = "INSERT INTO users (nama, nip, sk_pengangkatan) VALUES ('$name', '$nip', '$sk_pengangkatan')";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
        header("Location: lihat.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data User</title>
</head>

<body>
    <h2>Tambah Data User</h2>
    <div style="margin-bottom: 10px;">
        <a href="lihat.php">Kembali</a>
    </div>
    <form method="post" action="">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="nama" required><br>
        <label for="email">Nip:</label><br>
        <input type="text" id="nip" name="nip" required><br><br>
        <label for="email">SK Pengangkatan:</label><br>
        <input type="text" id="sk_pengangkatan" name="sk_pengangkatan" required><br><br>
        <input type="submit" value="Tambah Data">
    </form>
</body>

</html>
