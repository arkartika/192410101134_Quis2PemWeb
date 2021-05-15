<?php
$host ="localhost";
$username = "root";
$password = "";
$database ="user";

$connect = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_error()){
    echo "Koneksi database gagal :" .mysqli_connect_error();
}
?>