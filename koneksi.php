<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "simitra";

// Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
