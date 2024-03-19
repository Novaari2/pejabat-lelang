<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diubah";
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
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>

</html>
