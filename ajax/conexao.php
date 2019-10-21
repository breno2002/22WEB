<?php
$servername = "localhost";
$database = "22web";
$username = "root";
$password = "usbw";

$mysqli = mysqli_connect($servername, $username, $password, $database);

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
	mysqli_close9($mysqli);
   }
   else{}
   
?>