<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['nama'];
    $nip = $_POST['nip'];
    $sk_pengangkatan = $_POST['sk_pengangkatan'];

    $sql = "UPDATE users SET nama='$name', nip='$nip', sk_pengangkatan='$sk_pengangkatan' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diubah";
        header("Location: lihat.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data User</title>
</head>

<body>
    <h2>Edit Data User</h2>
    <div style="margin-bottom: 10px;">
        <a href="lihat.php">Kembali</a>
    </div>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="nama" value="<?php echo $row['nama']; ?>" required><br><br>
        <label for="email">Nip:</label><br>
        <input type="text" id="nip" name="nip" value="<?php echo $row['nip']; ?>" required><br><br>
        <label for="email">SK Pengangkatan:</label><br>
        <input type="text" id="sk_pengangkatan" name="sk_pengangkatan" value="<?php echo $row['sk_pengangkatan']; ?>" required><br><br>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>

</html>
