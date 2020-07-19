<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
    
//Kết nối tới database
$serverName ="LINHCHI-556ECIR\SQLEXPRESS";
$connectionInfo = array("Database"=>"giangvien_3");

$conn=sqlsrv_connect($serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

//Lấy dữ liệu nhập vào
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
if (!$username || !$password) {
echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.<BR>
 <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
//Kiểm tra tên đăng nhập có tồn tại không
$sql="SELECT username,passwo FROM LinhChi WHERE username = '$username' ";
$params = array();
$options =  array( "Scrollable" =>SQLSRV_CURSOR_KEYSET );
$query=sqlsrv_query($conn ,$sql,$params, $options);
if (sqlsrv_num_rows($query) == false) {
echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.<br>
 <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}

//Lấy mật khẩu trong database ra
$row = sqlsrv_fetch_array($query);
  
//So sánh 2 mật khẩu có trùng khớp hay không
if ($password != $row['passwo']) {
echo "Mật khẩu không đúng. Vui lòng nhập lại.<br>
 <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
  
//Lưu tên đăng nhập
$_SESSION['username'] = $username;
echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công.
<a href='trangchu.php'><h3><BR> Thoat </h3></a>";
die();
}
?>