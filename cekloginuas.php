<?php
session_start();
include 'koneksiuas.php';

$username =$_POST['username'];
$password =$_POST['password'];
$email =$_POST['email'];

$data = mysqli_query($koneksiuas, "SELECT * FROM login WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($data);
//print_r($cek);

if ($cek > 0) {
    $row = mysqli_fetch_assoc($data);
    $_SESSION['username'] = $username;
    header("location: index.php?pesan=loginberhasil");
} else {
    header("location: login.php?pesan=gagal");
}
?>