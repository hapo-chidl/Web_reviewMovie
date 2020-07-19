<?php 
$timezone = date_default_timezone_set("Europe/London");

$db['db_host'] = "localhost"; // Database host name.
$db['db_user'] = "root"; // Database username.
$db['db_pass'] = "";// Database password.
$db['db_name'] = "cmt";// Database name.
    

foreach($db as $key=>$value) {
    define(strtoupper($key), $value);
}

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($con) {
    //echo "We are Conneceted";
}
else {
    die("Unable to connect to database" . mysqli_error());
}










?>