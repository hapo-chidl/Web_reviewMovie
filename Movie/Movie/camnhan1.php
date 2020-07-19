<?php
// Nếu không phải là sự kiện đăng ký thì không xử lý
session_start();
                       
if (!isset($_POST['name'])) {
    die('');
}
//Kết nối tới database
require_once ('C:\xampp\htdocs\Movie\connect.php');
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Lấy dữ liệu từ file dangky.php
$tenphim = addslashes($_POST['name']);
$camnhan = addslashes($_POST['message']);
if($_SESSION['UsernameUser'] == NULL)
 {echo "Ban chưa đăng nhập.   <a href='login.html'>Đăng Nhập</a>";
    exit;
}
else
$username=$_SESSION['UsernameUser'];

// Mã khóa mật khẩu


//Kiểm tra tên đăng nhập này đã có người dùng chưa
$sql1="SELECT IdUser FROM User_ WHERE UsernameUser = '$username' ";
$params = array();
$options =  array( "Scrollable" =>SQLSRV_CURSOR_KEYSET );
$query1=sqlsrv_query($conn ,$sql1,$params, $options);
/*if (sqlsrv_num_rows($query1)==false) {
    echo "Ban chưa đăng nhập.   <a href='login.html'>Đăng Nhập</a>";
    exit;
}*/
//javascript: history.go(-1)
$idUser1= sqlsrv_fetch_array($query1);
$idUser=$idUser1['IdUser'];
//Kiểm tra email có đúng định dạng hay không
/*if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) {
    echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
*/
//Kiểm tra email đã có người dùng chưa

$sql = "INSERT INTO CamNhan (IdUser,Cam_Nhan, TenMovie)VALUES ('{$idUser}',
            '{$camnhan}',
            '{$tenphim}')
           
            ";
        
            $params = array();
//Lưu thông tin thành viên vào bảng
           
            $addcamnhan = sqlsrv_query( $conn, $sql, $params);
            
//Thông báo quá trình lưu
if ($addcamnhan!=false){
   echo "Đăng bài thành công. <a href='contact.php'>Trở lại </a>";
} else 
die(print_r(sqlsrv_errors(),true));
?>