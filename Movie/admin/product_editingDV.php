<?php
require_once ('C:\xampp\htdocs\Movie\connect.php');
session_start();
 // require_once ('C:\xampp\htdocs\Movie\admin\function.php');
if (isset($_SESSION['UsernameAdmin']) && $_SESSION['UsernameAdmin']){

                if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['Quocgia']) && !empty($_POST['Quocgia'])) {
                    //$galleryImages = array();
                    if (empty($_POST['name'])) {
                        $error = "Bạn phải nhập tên Diễn Viên";
                    } else if (empty($_POST['Quocgia'])) {
                        $error = "Bạn phải nhập  Quốc gia ";
                    } 
                }
                   
   if ( isset($_FILES['image'])) {
    if ($_FILES['image']['error'] > 0)
        echo "Upload anh lỗi rồi!";
    else {
       // move_uploaded_file($_FILES['image']['tmp_name'], $_FILES['image']['name']);
        //echo "upload thành công <br/>";
        $image= "images\DienVien\\".$_FILES['image']['name'];} }

                   $tendienvien=$_POST['name'];      $quocgia=$_POST['Quocgia'];
                   $giaithuong=$_POST['Giaithuong'];    
                   $date=date($_POST['sinhnhat']);


                    if (!isset($error)) {
                        $sql = "INSERT INTO DienVien (FullNameDV,QuocGia,GiaiThuong,Birthday,linkDV) 
                        VALUES (N'{$tendienvien}',N'{$quocgia}',N'{$giaithuong}','{$date}','{$image}' ) ";      
            $params = array();           
            $addcamnhan = sqlsrv_query( $conn, $sql, $params);
            
                        if ($addcamnhan!=False) {
                          
                           echo " <h2>Thêm Diễn Viên thành công.  <a href='product_listingDV.php'>Trở lại </a>";
                        }
                    }
                 else {
                  die(print_r(sqlsrv_errors(),true));
                }
                  
} ?>

                