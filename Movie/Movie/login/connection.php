<?php
$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'Review_truyen';
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
mysqli_query($conn,s"SET NAMES 'UTF8'");
?>