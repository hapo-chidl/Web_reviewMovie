

<?php
include 'header.php';
if (isset($_SESSION['UsernameAdmin']) && $_SESSION['UsernameAdmin']){
   ?>

    <div class="main-content">
        <h1>Danh sách Thành viên</h1>
        <div class="product-items">
            <div class="buttons">
                <a href="./testUser.php">Thêm User</a>
            </div>
            <ul>
                <li class="product-item-heading">
                    <div class="product-prop product-img">Tên Đăng Nhập - PassWord</div>
                    <div class="product-prop product-name">FullName</div>
                    <div class="product-prop product-button">
                    Xóa
                    </div>

                                        
                    <div class="clear-both"></div>
                </li>
                <?php
            require_once ('C:\xampp\htdocs\Movie\admin\PhânTrangUser.php');
            ?>
            </ul>
            
            <div class="clear-both"></div>
        </div>
    </div>
    <?php
}
include 'footer.php';
?>