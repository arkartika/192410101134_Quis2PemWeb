<?php
session_start();

include "koneksi.php";

$sql = mysqli_query($connect, "SELECT * FROM data WHERE username= '$_POST[username]' AND password ='$_POST[password]' ");
$data = mysqli_fetch_array($sql);

if( ! empty($data)){
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama'] = $data['nama'];

    setcookie("message", "delete",time()-1);

    header("location: welcome.php");
}else{
    setcookie("message", "Maaf, Username atau Password tidak sesuai", time()+3600);

    header("location: index.php");
}
?>