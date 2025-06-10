<?php
// sunucu ayarları
/*$server="localhost";
$user="root";
$pass="";
$db="net12h";*/

// local ayarlar
$server="localhost";
$user="root";
$pass="";
$db="net12h";

$conn = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
?>