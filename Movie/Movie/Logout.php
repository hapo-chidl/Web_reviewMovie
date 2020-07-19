<?php
session_start();



if(isset($_SESSION['UsernameUser']) && $_SESSION['UsernameUser'] != NULL) {
unset($_SESSION['UsernameUser']);
//session_destroy(); // xóa session login
}
?>
<a href="index.php">HOME</a>
