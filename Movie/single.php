<!DOCTYPE html>
<?php  session_start(); ?>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Review Movie</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
    
</head>
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header>
	<div class="top-bar">
		<div class="wrap-top zerogrid">
			<div class="row">
				<div class="col-1-2">
					<div class="wrap-col">
						<ul>
							<li class="mail"><p>ContacUst@Gmail.com</p></li>
							<li class="phone"><p>19008098</p></li>
						</ul>
					</div>
				</div>
				<div class="col-1-2">
					<div class="wrap-col f-right">
						<ul>
							
	  
	                      <?php

	if (isset($_SESSION['UsernameUser']) && $_SESSION['UsernameUser']){
	echo $_SESSION['UsernameUser'] .
	"<a href='Logout.php'> <Br>Logout </a>";	

}
else
{
	echo "<li><a href='login.html' style='color: white'> Đăng Nhập </a></li>
	<li><a href='Signup.html'style='color: white'> <Br>Đăng Kí</Br> </a></li>" ;


}


?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap-header zerogrid">
		<div class="row">
			<div class="col-1-2">
				<div class="wrap-col">
					<div class="logo"><a href="#"><img src="images/logo.png"/></a></div>	
				</div>
			</div>
			<div class="col-1-2">
				<div class="wrap-col f-right">
					<form method="post" action="Search.php" id="search"  >
								<input name="tim"  type="text" size="40" placeholder="Phim..." />
						  <input type="submit" value="Submit">
						</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="menu">
				<nav>
					<div class="wrap-nav">
					  <ul>
						 <li ><a href="index.php">Trang chủ</a></li>
						 <li><a href="indexDV.php">Diễn viên</a></li>
						 <li><a href="indexDD.php">Đạo diễn</a></li>
						 <li><a href="contact.php">Góc Nhìn</a></li>
						 
					   </ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>



<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container zerogrid">
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">
				<article>
					<?php 
					require_once ('C:\xampp\htdocs\Movie\connect.php');
$id1 = $_GET['id'];
$sql1="select *from Movie
where IdMovie = $id1";

$sql2="select *from DienVien, DongPhim
where DongPhim.IdDienVien=DienVien.IdDienVien
and IdMovie = $id1";

$sql3="select *from Director, DaoDien
where Director.IdDirector=DaoDien.IdDirector
and IdMovie = $id1";
$sql4="select *from NhaSanXuat
where IdMovie = $id1";


 $params = array();
        $options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
        $query1 = sqlsrv_query($conn, $sql1, $params, $options);
         $query2 = sqlsrv_query($conn, $sql2, $params, $options);
          $query3 = sqlsrv_query($conn, $sql3, $params, $options);
            $query4 = sqlsrv_query($conn, $sql4, $params, $options);

        $row = sqlsrv_fetch_array($query1);
        $row1 = sqlsrv_fetch_array($query2);
        $row2 = sqlsrv_fetch_array($query3);
        $row3 = sqlsrv_fetch_array($query4);

					echo "<div class='art-header'>";
						echo "<div class='col-1-3'>";
						echo"	<div class='wrap-col'>
								<img src='{$row['link']}' />
							   </div>";
						echo "</div>";
						echo "<div class='col-2-3'>
							    <div class='wrap-col'>
								  <ul
									<li><p>Tên Phim : {$row['TenPhim']}</a></p></li>
									<li><p>Thể Loại : {$row['TheLoai']}</a></p></li>";
									echo "<li><p> Diễn Viên:"; 
									echo "{$row1['FullNameDV']},";
									 echo "</a></p></li>";
									echo "<li><p>Đạo Diễn : {$row2['FullName']}</a></p></li>
									<li><p>Quốc Gia : NULL </a></p></li>
									<li><p>Nhà sản xuất : {$row3['TenNSX']}</a></p></li>";
								echo "</ul>
							</div>
						</div> ";
						echo "<div class='clear'></div>";
					echo "</div>";
					echo "<div class='art-content'>
						{$row['Noidung']}
						<img src='{$row['link1']}'/>
						
						<div class='note'>
						 
						  <div class='clear'></div>
						</div>
						
						
						<div class='clear'></div>
					</div>";
					?>
				</article>
				<div class="widget wid-related">
					<div class="wid-header">
						<h5>Phim Cùng Đạo Diễn </h5>
					</div>
					<div class="wid-content">

						<div class="row">
						
 
 <?php
					require_once ('C:\xampp\htdocs\Movie\connect.php');
 $sql1="select *from Director,Movie,DaoDien
where
Director.IdDirector=DaoDien.IdDirector
and
DaoDien.IdMovie=Movie.IdMovie
and
DaoDien.IdMovie like '%$id1%'";
 $params = array();
        $options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
        $query1 = sqlsrv_query($conn, $sql1, $params, $options);       	
				$j=0;
					while (($row = sqlsrv_fetch_array($query1) ) && ($j!=4))
					{
						$j++;

							echo "<div class='col-1-3'>
								<div class='wrap-col'>";
									echo "<a ><img src='{$row['link']}' /></a>
									<a href='single.php?id={$row['IdMovie']}'><h4>{$row['TenPhim']} </h4></a>
								</div>
							</div>";
							}
						
?>

						</div>
					</div>
				</div>
			</div>
		</div>
		
<?php include 'index1.php'; ?>




	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="widget wid-about">
							<div class="wid-header">
								<h5>Welcome</h5>
							</div>
							<div class="logo"><a href="#"><img src="images/logo.png"/></a></div>
							<p> Review Movie- Đồng hành cùng bạn </p>
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="widget wid-meta">
							<div class="wid-header">
								<h5>Danh sách phim</h5>
							</div>
							<div class="widget-content">
								<div class="row">
									<ul>
										<li><a href="#">> Phim chiếu rạp </a></li>
										<li><a href="#">> Phim mới </a></li>
										<li><a href="#">> Phim xem nhiều</a></li>
										<li><a href="#">> Phim thuyết minh</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="widget wid-meta">
							<div class="wid-header">
								<h5>Quốc gia nổi bật</h5>
							</div>
							<div class="widget-content">
								<div class="row">
									<ul>
										<li><a href="#">> Hàn Quốc </a></li>
										<li><a href="#">> Trung Quốc </a></li>
										<li><a href="#">> Việt Nam</a></li>
										<li><a href="#">> Thái Lan</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="widget wid-meta">
							<div class="wid-header">
								<h5>Contacts</h5>
							</div>
							<div class="widget-content">
								<div class="row">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</footer>


</div>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/jquery.min.js"></script>
</body></html>