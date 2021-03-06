<!DOCTYPE html>
<?php  session_start(); ?>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

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
						 <li><a href="single.php ">Top Phim Lẻ</a></li>
						 <li><a href="single.php">Top Phim Bộ</a></li>
						 <li><a href="single.php">Top Phim Chiếu Rạp</a></li>
						 <li><a href="indexDV.php">Diễn viên</a></li>
						 <li class="active"><a href="indexDD.php">Đạo diễn</a></li>
						 <li><a href="contact.php">Cảm Nhận</a></li>
						 
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
$sql1="select *from Director
where IdDirector like '%$id1%'";
 $params = array();
        $options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
        $query1 = sqlsrv_query($conn, $sql1, $params, $options);
        $row = sqlsrv_fetch_array($query1);

					echo "<div class='art-header'>";
						echo "<div class='col-1-3'>";
						echo"	<div class='wrap-col'>
								<img src='{$row['linkDD']}' />
							   </div>";
						echo "</div>";
						echo "<div class='col-2-3'>
							    <div class='wrap-col'>
								  <ul
									<li><p> Họ Tên : {$row['FullName']}</a></p></li>
									<li><p>Quốc Gia : {$row['QuocGia']}</a></p></li>";
									echo "<li><p> Giải Thưởng: {$row['GiaiThuong']} ";
									 echo"</a></p></li>";
									echo "<li><p>Ngày tháng năm sinh :Chua Biet</a></p></li>
								</ul>
							</div>
						</div> ";
						echo "<div class='clear'></div>";
					echo "</div>";
					
					?>
				</article>
				<div class="widget wid-related">
					<div class="wid-header">
						<h5>Phim Lien Quan </h5>
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
DaoDien.IdDirector like '%$id1%'";
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
		<div id="sidebar" class="col-1-3">
			<div class="wrap-sidebar">
				<!---- Start Widget ---->
				<div class="widget wid-new-updates">
					<div class="wid-header">
						<h5>Hot Updates !</h5>
					</div>
					<div class="wid-content">
						<ul>
						<li><a href="#">Mad Max: Fury Road</a><span><img src="images/hot.png" /></span></li>
						<li><a href="#">The Age of Adaline</a><span><img src="images/hot.png" /></span></li>
						<li><a href="#">Pound of Flesh</a><span><img src="images/hot.png" /></span></li>
						<li><a href="#">Bloodbath Island</a><span><img src="images/hot.png" /></span></li>
						<li><a href="#">Pound of Flesh</a><span><img src="images/hot.png" /></span></li>
						</ul>
					</div>
				</div>
				<!---- Start Widget ---->
				<div class="widget wid-tag">
					<div class="wid-header">
						<h5>Tags</h5>
					</div>
					<div class="wid-content">
						<ul>
						<li><a href="#">animals</a></li>
						<li><a href="#">ssdad</a></li>
						<li><a href="#">ss</a></li>
						<li><a href="#">asdas</a></li>
						<li><a href="#">asdsals</a></li>
						<li><a href="#">dasdas</a></li>
						<li><a href="#">animals</a></li>
						<li><a href="#">aasdasls</a></li>
						</ul>
					</div>
				</div>
				<!---- Start Widget ---->
				<div class="widget wid-post">
					<div class="wid-header">
						<h5>Today's movies</h5>
					</div>
					<div class="wid-content">
						<div class="post">
							<a href="#"><img src="images/1.jpg"/></a>
							<div class="wrapper">
							  <a href="#"><h6>A Blue Morning</h6></a>
							  <p>March 1, 2015</p>
							  <a href="#"><img src="images/star.png" /></a>
							</div>
						</div>
						<div class="post">
							<a href="#"><img src="images/2.jpg"/></a>
							<div class="wrapper">
							 <a href="#"><h6>A Blue Morning</h6></a>
							  <p>March 1, 2015</p>
							  <a href="#"><img src="images/star.png" /></a>
							</div>
						</div>
						<div class="post">
							<a href="#"><img src="images/3.jpg"/></a>
							<div class="wrapper">
							 <a href="#"><h6>A Blue Morning</h6></a>
							  <p>March 1, 2015</p>
							  <a href="#"><img src="images/star.png" /></a>
							</div>
						</div>
					</div>
				</div>
				<!---- Start Widget ---->
				
				</div>
			</div>
		</div>
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