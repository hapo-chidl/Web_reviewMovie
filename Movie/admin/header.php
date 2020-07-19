<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/admin_style.css" >
        <script src="../resources/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <?php
        session_start();
        require_once ('C:\xampp\htdocs\Movie\connect.php');
      //   require_once ('C:\xampp\htdocs\Movie\admin\function.php');
      
       include 'function.php';
        if (isset($_SESSION['UsernameAdmin']) && $_SESSION['UsernameAdmin']){ //Kiểm tra xem đã đăng nhập chưa?
            ?>
            <div id="admin-heading-panel">
                <div class="container">
                    <div class="left-panel">
                        Xin chào <span>Admin</span>
                    </div>
                    <div class="right-panel">
                        <img height="24" src="../images/home.png" />
                        <a href="../index.php">Trang chủ</a>
                        <img height="24" src="../images/logout.png" />
                        <a href="logout.php">Đăng xuất</a>
                    </div>
                </div>
            </div>
            <div id="content-wrapper">
                <div class="container">
                    <div class="left-menu">
                        <div class="menu-heading">Admin Menu</div>
                        <div class="menu-items">
                            <ul>
                                <li><a href="product_listing.php">Phim</a></li>
                                <li><a href="product_listingDV.php">Diễn Viên</a></li>
                                <li><a href="product_listingDD.php">Đạo Diễn</a></li>
                                 <li><a href="product_listingUser.php">User</a></li>
                               
                            </ul>
                        </div>
                    </div>
                <?php } ?>