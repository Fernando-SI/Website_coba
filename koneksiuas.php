<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "uas";

$koneksiuas = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(!$koneksiuas){
    echo "Koneksi gagal";
} //else{
 //   echo "Koneksi berhasil";
//}
?>