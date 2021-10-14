<!DOCTYPE html>
<html>
<head>
    <title>cookie 01</title>
</head>
<body>
<?php
$value = 'Sofia';
$value2= 'Martryatus Sofia';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600); /* expire in 1 hour */

echo "<h1>Ini halaman pengesetan cookie</h1>";

echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>
</body>
</html>