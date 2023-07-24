<?php
session_start();
include 'koneksiuas.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$cekUsername = mysqli_query($koneksiuas, "SELECT * FROM login WHERE username = '$username'");
if (mysqli_num_rows($cekUsername) > 0) {
    header("location: register.php?pesan=dataada");
} else {
    mysqli_query($koneksiuas, "INSERT INTO login VALUES('', '$username', '$password', '$email')");
    header("location: login.php");
}
?>