<?php
session_start();



if(isset($_SESSION['UsernameAdmin']) && $_SESSION['UsernameAdmin'] != NULL) {
unset($_SESSION['UsernameAdmin']);
//session_destroy(); // xóa session login
}
?>
<a href="index.php">HOME</a>
