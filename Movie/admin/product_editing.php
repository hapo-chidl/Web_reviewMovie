<?php
require_once ('C:\xampp\htdocs\Movie\connect.php');
session_start();
 // require_once ('C:\xampp\htdocs\Movie\admin\function.php');
if (isset($_SESSION['UsernameAdmin']) && $_SESSION['UsernameAdmin']){
                if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['Theloai']) && !empty($_POST['Theloai'])) {
                    //$galleryImages = array();
                    if (empty($_POST['name'])) {
                        $error = "Bạn phải nhập tên Phim";
                    } else if (empty($_POST['Theloai'])) {
                        $error = "Bạn phải Thể loại của phim";
                    } 
                }
                   
   if ( isset($_FILES['image'])) {
    if ($_FILES['image']['error'] > 0)
        echo "Upload anh lỗi rồi!";
    else {
      //  move_uploaded_file($_FILES['image']['tmp_name'], $_FILES['image']['name']);
        //echo "upload thành công <br/>";
        $image= "images\\".$_FILES['image']['name'];} }

                   if ( isset($_FILES['image1'])) {
    if ($_FILES['image1']['error'] > 0)
        echo "Upload anh lỗi rồi!";
    else {
        //echo "upload thành công <br/>";
        $image1= "images\\".$_FILES['image1']['name'];
    } }
                   $tenphim=$_POST['name'];      $quocgia=$_POST['Quocgia'];
                   $theloai=$_POST['Theloai'];    
                   $noidung=$_POST['content'];

                    if (!isset($error)) {
                        $sql = "INSERT INTO Movie (TenPhim,TheLoai,QuocGia,Noidung,link, link1) 
                        VALUES (N'{$tenphim}',N'{$theloai}',N'{$quocgia}',N'{$noidung}','{$image}','{$image1}' ) ";      
            $params = array();           
            $addcamnhan = sqlsrv_query( $conn, $sql, $params);
            
            
                        if ($addcamnhan!=False) {
                          
                           echo " <h2>Thêm phim thành công.  <a href='product_listing.php'>Trở lại </a>";
                        $sql1="select *from Movie
where TenPhim = '$tenphim' ";
 $params = array();
        $options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
        $query1 = sqlsrv_query($conn, $sql1, $params, $options);
 $row= sqlsrv_fetch_array($query1);

$name =$_SESSION['UsernameAdmin'];
  $sql2="select *from Admin
where UsernameAdmin= '$name' ";
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
        $query2 = sqlsrv_query($conn, $sql2, $params, $options);
 $row1= sqlsrv_fetch_array($query2);

 $sql3 = "INSERT INTO quanliphim(IdAdmin, IdMovie) 
values ('{$row1['IdAdmin']}','{$row['IdMovie']}')";
                        }
                    }
                 else {
                  die(print_r(sqlsrv_errors(),true));
                }
                  
} ?>

                