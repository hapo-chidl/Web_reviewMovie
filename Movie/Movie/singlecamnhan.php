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
						 <li><a href="indexDD.php">Đạo diễn</a></li>
						 <li class="active"><a href="contact.php">Cảm Nhận</a></li>
						 
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
$sql1="Select * from CamNhan
where IdCamnhan like '%$id1%'";
 $params = array();
        $options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
        $query1 = sqlsrv_query($conn, $sql1, $params, $options);
        $row = sqlsrv_fetch_array($query1);

					echo "<div class='art-header'>";
						echo "<div class='col-1-3'>";
						echo"	<div class='wrap-col' height ='30'>
								<img src='images/anhdep.jpg' />
							   </div>";
						echo "</div>";
						echo "<div class='col-2-3'>
							    <div class='wrap-col'>
								  <ul
									<li><p>Tên Phim : <h1 align = 'center'>{$row['TenMovie']}<h1> </a></p></li>";
									echo "
								</ul>
							</div>
						</div> ";
						echo "<div class='clear'></div>";
					echo "</div>";
					echo "<div class='art-content'>
						 {$row['Cam_Nhan']}
						<img src='images/anhdep1.gif' />
						
						<div class='note'>
						 
						  <div class='clear'></div>
						</div>
						
						
						<div class='clear'></div>
					</div>";
					?>

					
				</article>
				<div class="widget wid-related">
					<div class="wid-header">
						<h5>Related Post</h5>
					</div>
					<div class="wid-content">
						<div class="row">
							<div class="col-1-3">
								<div class="wrap-col">
									<a href="#"><img src="images/10.jpg" /></a>
									<a href="#"><h4>Vero eros et accumsan et iusto odio </h4></a>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<a href="#"><img src="images/13.jpg" /></a>
									<a href="#"><h4>Vero eros et accumsan et iusto odio </h4></a>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<a href="#"><img src="images/6.jpg" /></a>
									<a href="#"><h4>Vero eros et accumsan et iusto odio </h4></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<div class="wrap-sidebar">
				<!---- Start Widget ---->
				
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