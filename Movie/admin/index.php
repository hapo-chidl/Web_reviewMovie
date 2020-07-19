<!DOCTYPE html>
<?php session_start();?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ADMIN </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php

    if (isset($_SESSION['UsernameAdmin']) && $_SESSION['UsernameAdmin']){
    echo " <div id='login-notify' class='box-content'>";
            echo "<h3>  Xin Chao  ".$_SESSION['UsernameAdmin'] ." <br/>
                 <h3 ><a href='./product_listing.php'>Quản lý trang web </a><br/>
                  <h3 ><a href='../'>Quay về trang ZMovie </a><br/>
                <a href='./logout.php'>Đăng xuất</a>
            </div>"; 

}
else
{ echo "<h3> <a href='./login.html'> Đăng Nhập </a><br>";
   
      
       }
?>
         
    </body>
</html>