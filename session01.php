<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP -4</title>
</head>
<body>
<?php
/**************************** 
Nama file : session01.php
Halaman ini merupakan halaman contoh penciptaan session.
Perintah session_start() harus ditaruh di perintah pertama tanpa spasi di depannya. 
Perintah session_start() harus ada pada setiap halaman yang berhubungan dengan session 
*****************************/

session_start();

$_SESSION['nama'] = "Martryatus Sofia"; echo "<a href='session02.php'>Menuju ke halaman kedua</a>";
?>
</body>
</html