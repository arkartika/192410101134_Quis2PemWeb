<?php
session_start();

if( ! isset($_SESSION['username'])){
    header("location: index.php");
}
?>

<html>
<head>
    <title>HALAMAN SETELAH LOGIN</title>
</head>
<body>
    <h1>SELAMAT DATANG!! <?php echo $_SESSION['nama']; ?> </h1>
    <h4>Anda Berhasil Login ke Aplikasi</h4>

    <a href="logout.php">logout</a>
</body>
</html>