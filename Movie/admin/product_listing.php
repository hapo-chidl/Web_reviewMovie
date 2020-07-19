

<?php
include 'header.php';
if (isset($_SESSION['UsernameAdmin']) && $_SESSION['UsernameAdmin']){
   ?>

    <div class="main-content">
        <h1>Danh sách Phim</h1>
        <div class="product-items">
            <div class="buttons">
                <a href="./test.php">Thêm phim</a>
            </div>
            <ul>
                <li class="product-item-heading">
                    <div class="product-prop product-img">Ảnh</div>
                    <div class="product-prop product-name">Tên Phim</div>
                    <div class="product-prop product-button">
                    Xóa
                    </div>

                                        
                    <div class="clear-both"></div>
                </li>
                <?php
            require_once ('C:\xampp\htdocs\Movie\admin\PhânTrang.php');
            ?>
            </ul>
            
            <div class="clear-both"></div>
        </div>
    </div>
    <?php
}
include 'footer.php';
?>