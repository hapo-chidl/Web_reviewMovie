<?php
require_once ('C:\xampp\htdocs\Movie\connect.php');
session_start();
 // require_once ('C:\xampp\htdocs\Movie\admin\function.php');
if (isset($_SESSION['UsernameAdmin']) && $_SESSION['UsernameAdmin']){

                if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['Quocgia']) && !empty($_POST['Quocgia'])) {
                    //$galleryImages = array();
                    if (empty($_POST['name'])) {
                        $error = "Bạn phải nhập FullName";
                    } else if (empty($_POST['Quocgia'])) {
                        $error = "Bạn phải nhập  Email ";
                    } 
                }
                   
   

                   $tendienvien=$_POST['name'];      $quocgia=$_POST['Quocgia'];
                   $giaithuong=$_POST['Giaithuong'];    
                   $date=$_POST['sinhnhat'];


                    if (!isset($error)) {
                        $sql = "INSERT INTO User_ (UsernameUser,PassUser,FullName,Email) 
                        VALUES ('{$date}','{$giaithuong}',N'{$tendienvien}','{$quocgia}') ";      
            $params = array();           
            $addcamnhan = sqlsrv_query( $conn, $sql, $params);
            
                        if ($addcamnhan!=False) {
                          
                           echo " <h2>Thêm User thành công.  <a href='product_listingUser.php'>Trở lại </a>";
                        }
                    }
                 else {
                  die(print_r(sqlsrv_errors(),true));
                }
                  
} ?>

                