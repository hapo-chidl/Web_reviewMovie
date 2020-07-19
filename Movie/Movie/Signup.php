<?php
// Nếu không phải là sự kiện đăng ký thì không xử lý
session_start();
if (!isset($_POST['name'])) {
    die('');
}
//Kết nối tới database
require_once ('C:\xampp\htdocs\Movie\connect.php');
}

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Lấy dữ liệu từ file dangky.php
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
$email = addslashes($_POST['email']);
$fullname = addslashes($_POST['name']);
$co_pass=addslashes($_POST['confirm-password']);
//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
/*if (!$username || !$password || !$email || !$fullname || !$birthday || !$sex) {
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
*/
// Mã khóa mật khẩu
echo $password;

//Kiểm tra tên đăng nhập này đã có người dùng chưa
$sql="SELECT UsernameUser FROM User_ WHERE UsernameUser= '$username' ";
$params = array();
$options =  array( "Scrollable" =>SQLSRV_CURSOR_KEYSET );
$query=sqlsrv_query($conn ,$sql,$params, $options);
if (sqlsrv_num_rows($query)!=false) {
    echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
if ($co_pass!=$password)
{
    echo "Xác nhận mật khẩu sai . <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

//Kiểm tra email có đúng định dạng hay không
/*if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) {
    echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
*/
//Kiểm tra email đã có người dùng chưa
$sql="SELECT Email FROM User_ WHERE Email = '$email' ";
$params = array();
$options =  array( "Scrollable" =>SQLSRV_CURSOR_KEYSET );
$query=sqlsrv_query($conn ,$sql,$params, $options);
if (sqlsrv_num_rows($query)!=false)  {
    echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
$sql = "INSERT INTO User_ (UsernameUser, PassUser,Email,FullName) VALUES ('{$username}',
            '{$password}',
            '{$email}',
            '{$fullname}')
            ";
        
            $params = array($username,$password,$email,$fullname);
//Lưu thông tin thành viên vào bảng
           
            $addmember = sqlsrv_query( $conn, $sql, $params);
            
//Thông báo quá trình lưu
if ($addmember!=false)
    echo "Quá trình đăng ký thành công. <a href='login.html'>Đăng Nhập </a>";
else
{
    echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='Signup.html'>Thử lại</a>";
die(print_r(sqlsrv_errors(),true));
}
?>