
<?php
echo"<meta charset='UTF-8'>";
// Nếu người dùng submit form thì thực hiện
echo "chii";
//  if (isset($_REQUEST['ok']))
if (isset($_POST['dangnhap'])) {

    // Gán hàm addslashes để chống sql injection
    $search = addslashes($_POST['search']);
echo $search;
    // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
    if (empty($search)) {
        echo "Yeu cau nhap du lieu vao o trong";
    } else {//kết nối database
        $serverName = "LINHCHI-556ECIR\SQLEXPRESS";
        $connectionInfo = array("Database" => "Review_phim");

        $conn = sqlsrv_connect($serverName, $connectionInfo);
        if ($conn === false) {
            die(print_r(sqlsrv_errors(), true));
        }


        // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.

        $sql1 = "SELECT * FROM Director WHERE FullName like N'%$search%'";
        $sql2 = "SELECT * FROM Movie WHERE TenPhim like N'%$search%'";
        $sql3 = "SELECT *FROM DienVien where  FullName like N'%$search%'";

        // Kết nối sql
        $params = array();
        $options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
        $query1 = sqlsrv_query($conn, $sql1, $params, $options);
        $query2 = sqlsrv_query($conn, $sql2,$params, $options);
        $query3 = sqlsrv_query($conn, $sql3, $params, $options);

        // Thực thi câu truy vấn


        // Đếm số đong trả về trong sql.
        $num1 = sqlsrv_num_rows($query1);
        $num2 = sqlsrv_num_rows($query2);
        $num3 = sqlsrv_num_rows($query3);
        // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
        if ($num2 > 0 && $search != "") {
            // Dùng $num để đếm số dòng trả về.
            echo "$num2 Kết quả trả về với từ khóa :<b>$search</b>";

            // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
            echo '<table border="1" cellspacing="0" cellpadding="10">';
            while ($row = sqlsrv_fetch_array($query2)) {
                echo '<tr>';
                echo "<td>{$row['TenPhim']}</td>";
                echo "<td>{$row['TheLoai']}</td>";

                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "Khong tim thay ket qua!";
        }
    }
}

          ?>
  
                                    <li><p>Nation: <a href="#">Action</a></p></li>
                                    <li><p>Tags: <a href="#">Action</a></p></li>
                                    <li><p>Upload: <a href="#">Action</a></p></li>
                                    <li><a class="button bt1" href="#">Play</a><a class="button bt1" href="#">Trailer</a></li>
                                    <li class="star"><a href="#"><img src="images/star.png" /></a></li>