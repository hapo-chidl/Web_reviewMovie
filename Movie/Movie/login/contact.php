<?php session_start(); ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="vi"> <!--<![endif]-->
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
	<li><a href='Signup.html'style='color: white'> <Br>Đăng Kí</Br> </a></li>" ;}
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
					 <a href="camnhan.php">
					<input type='submit' class="button" name="CamNhan"  value='Ghi Cảm Nhận' />		</a>		
			    </div>
			</div>
		</div>
		<div class="row">
			<div id="menu">
				<nav>
					<div class="wrap-nav">
					   <ul>
						 <li ><a href="index.php">Trang chủ</a></li>
						 <li><a href="single.html">Top Phim Lẻ</a></li>
						 <li><a href="single.html">Top Phim Bộ</a></li>
						 <li><a href="single.html">Top Phim Chiếu Rạp</a></li>
						 <li><a href="single.html">Diễn viên</a></li>
						 <li><a href="single.html">Đạo diễn</a></li>
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
				<div class="movie">
					<div class="row type">
						<div class="title">
							<center><h2>Cảm Nhận</h2></center>
						
					<div class="row">
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									 <img class="thumb" src="images/anh1.jpg"  />
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a>  
									  </div>  
									  
									</div>
									<div class="clear"></div>
									<a href="single.html"><h3>Ngôi làng hành phúc</h3></a>
									<span>Two tails</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									  <img class="thumb" src="images/anh2.jpg"  /> 
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a>  
									  </div>  
									</div>
									<a href="single.html"><h3>Giải mã bí ẩn ngân hà</h3></a>
									<span>Ad Astra</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									 <img class="thumb" src="images/anh4.jpg"  /> 
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a> 
									  </div>  
									</div>
									<a href="single.html"><h3>Câu chuyện đồ chơi 4</h3></a>
									<span>Toy Story 4</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect"> 
									  <img class="thumb" src="images/anh5.jpg"  />  
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a>  
									  </div>  
									</div>
									<a href="single.html"><h3>Tu viện kinh hoàng</h3></a>
									<span>St.Agatha </span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									  <img class="thumb" src="images/anh6.jpg"  />   
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a> 
									  </div>  
									</div>
									<a href="single.html"><h3>Hành trình của chú chó ...</h3></a>
									<span>A dog's journey</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									  <img class="thumb" src="images/anh7.jpg"  />   
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a>  
									  </div>  
									</div>
									<a href="single.html"><h3>Đội bóng chuyền nữ</h3></a>
									<span>Girls with Balls</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									  <img class="thumb" src="images/anh8.jpg"  /> 
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a>  
									  </div>  
									</div>
									<a href="single.html"><h3>Đàn ông song tử</h3></a>
									<span>Gemini Man</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									  <img class="thumb" src="images/anh9.jpg"  />   
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a>  
									  </div>  
									</div>
									<a href="single.html"><h3>Chuyến bay sinh tửu..</h3></a>
									<span>The caption</span>
								</div>
							</div>
						</div>
					</div>
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