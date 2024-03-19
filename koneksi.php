<?php
$servername = "localhost";
$username = "username"; // Ganti dengan username MySQL Anda
$password = "password"; // Ganti dengan password MySQL Anda
$dbname = "crud_example";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
