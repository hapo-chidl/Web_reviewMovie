<?php
include 'header.php';
  if (isset($_SESSION['UsernameAdmin']) && $_SESSION['UsernameAdmin']){
    ?>
    <div class="main-content">
        <h1>Xóa Phim</h1>
        <div id="content-box">
            <?php
            $error = false;
            if (isset($_GET['id']) && !empty($_GET['id'])) {
               require_once ("connect.php");
               $id = $_GET['id'];
               $sql1 = "Delete from NhaSanXuat WHERE IdMovie = $id";
               $sql2 = "Delete from Daodien WHERE IdMovie = $id";
               $sql3= "Delete from DongPhim WHERE IdMovie = $id";
               $sql4 = "Delete from quanliphim WHERE IdMovie = $id";
               $sql5 = "Delete from comments WHERE IdMovie = $id";
               $sql6 = "Delete from comment WHERE IdMovie = $id";
               $sql7 = "Delete from Rate WHERE IdMovie = $id";
               $sql = "Delete from Movie where IdMovie = $id ";
               $params = array();
                $query1 = sqlsrv_query($conn, $sql1, $params);
                $query2 = sqlsrv_query($conn, $sql2, $params);
                $query3 = sqlsrv_query($conn, $sql3, $params);
                $query4 = sqlsrv_query($conn, $sql4, $params);
                $query5 = sqlsrv_query($conn, $sql5, $params);
                $query6 = sqlsrv_query($conn, $sql6, $params);
                $query7 = sqlsrv_query($conn, $sql7, $params);
               $query = sqlsrv_query($conn, $sql, $params);
                if (!$query) {
                    print_r( sqlsrv_errors());
                    $error = "Không thể xóa Phim này.";
                }
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h2>Thông báo</h2>
                        <h4><?= $error ?></h4>
                        <a href="./product_listing.php">Danh sách Phim</a>
                    </div>
        <?php } else { ?>
                    <div id="success-notify" class="box-content">
                        <h2>Xóa Phim  thành công</h2>
                        <a href="./product_listing.php">Danh sách Phim</a>
                    </div>
                <?php } ?>
    <?php } ?>
        </div>
    </div>
    <?php
}
include 'footer.php';
?>