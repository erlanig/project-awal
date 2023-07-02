<?php
require 'koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query_sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.php");
} else {
    echo "Maaf, terjadi kesalahan: " . mysqli_error($conn);
}
