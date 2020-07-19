<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
// PH?N X? LÝ PHP
// BU?C 1: K?T N?I CSDL
$serverName = "LINHCHI-556ECIR\SQLEXPRESS";
        $connectionInfo = array("Database" => "Review_phim");

        $conn = sqlsrv_connect($serverName, $connectionInfo);
        if ($conn === false) {
            die(print_r(sqlsrv_errors(), true));
        }

// BU?C 2: TÌM T?NG S? RECORDS
$sql1 = "select count(IdMovie) as total from Movie";
$result = sqlsrv_query($conn, $sql1);
$row = sqlsrv_fetch_array($result);
$total_records = $row['total'];

// BU?C 3: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 8;

// BU?C 4: TÍNH TOÁN TOTAL_PAGE VÀ START
// t?ng s? trang
$total_page = ceil($total_records / $limit);

// Gi?i h?n current_page trong kho?ng 1 d?n total_page
if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}

// Tìm Start
$start = ($current_page - 1) * $limit;

// BU?C 5: TRUY V?N L?Y DANH SÁCH TIN T?C
// Có limit và start r?i thì truy v?n CSDL l?y danh sách tên
$sql2 ="SELECT * FROM Movie
ORDER BY IdMovie
OFFSET $start  ROWS
FETCH NEXT $limit ROWS ONLY";

$result = sqlsrv_query($conn, $sql2 );


echo "<div>";
    
    // PH?N HI?N TH? TN T?C
    // BU?C 6: HI?N TH? IDANH SÁCH TIN T?C
     require_once ('C:\xampp\htdocs\Movie\phim.php') ;
    
    ?>
</div>
<div class="pagination">
    <?php
    // PH?N HI?N TH? PHÂN TRANG
    // BU?C 7: HI?N TH? PHÂN TRANG
    

    // n?u current_page > 1 và total_page > 1 m?i hi?n th? nút prev
    if ($current_page > 1 && $total_page > 1){

        echo '<a href="index.php?page='.($current_page-1).'"style='color: red'>Prev</a> | ';
    }

    // L?p kho?ng gi?a
    for ($i = 1; $i <= $total_page; $i++){
        // N?u là trang hi?n t?i thì hi?n th? th? span
        // ngu?c l?i hi?n th? th? a
        if ($i == $current_page){
            echo '<span>'.$i.'</span> | ';
        }
        else{
            echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
        }
    }
    // n?u current_page < $total_page và total_page > 1 m?i hi?n th? nút prev
    if ($current_page < $total_page && $total_page > 1){
        echo '<a href="index.php?page='.($current_page+1).'">Next</a> | ';
    }
    ?>
</div>
</body>
</html>