<?php
$serverName ="LINHCHI-556ECIR\SQLEXPRESS";
$connectionInfo = array("Database"=>"Review_phim");

$conn=sqlsrv_connect($serverName, $connectionInfo);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}


?>