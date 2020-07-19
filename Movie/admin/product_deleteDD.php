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
              $id= $_GET['id'];
               $sql1 = "Delete from DaoDien where IdDirector =$id ";
               $sql = "Delete from Director where IdDirector =$id ";

               $params = array();
               $query = sqlsrv_query($conn, $sql1, $params);
        $query1 = sqlsrv_query($conn, $sql, $params);
                if (!$query1) {
                    $error = "Không thể xóa Đạo diễn này.";
                }
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h2>Thông báo</h2>
                        <h4><?= $error ?></h4>
                        <a href="./product_listingDD.php">Danh sách Phim</a>
                    </div>
        <?php } else { ?>
                    <div id="success-notify" class="box-content">
                        <h2>Xóa  thành công</h2>
                        <a href="./product_listingDD.php">Danh sách Đạo Diễn</a>
                    </div>
                <?php } ?>
    <?php } ?>
        </div>
    </div>
    <?php
}
include 'footer.php';
?>