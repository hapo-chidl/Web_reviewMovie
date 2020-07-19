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
                $sql = "Delete from CamNhan where IdUser = $id ";
                $sql1 = "Delete from comments where IdUser = $id ";
               $sql2 = "Delete from User_ where IdUser = $id ";
        
               $params = array();
        $query1 = sqlsrv_query($conn, $sql, $params);
         $query2 = sqlsrv_query($conn, $sql1, $params);
          $query3 = sqlsrv_query($conn, $sql2, $params);
        

                if (!$query3) {
                    $error = "Không thể xóa .";
                }
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h2>Thông báo</h2>
                        <h4><?= $error ?></h4>
                        <a href="./product_listingUser.php">Danh sách User</a>
                    </div>
        <?php } else { ?>
                    <div id="success-notify" class="box-content">
                        <h2>Xóa User thành công</h2>
                        <a href="./product_listingUser.php">Danh sách User</a>
                    </div>
                <?php } ?>
    <?php } ?>
        </div>
    </div>
    <?php
}
include 'footer.php';
?>