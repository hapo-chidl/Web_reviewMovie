
<?php session_start(); ?>
</body>
</html>
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
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
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
if (isset($_SESSION['username']) && $_SESSION['username']){
	echo $_SESSION['username'] .
	"<a href='Logout.php'> <Br>Logout </a>";	
	
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
					<form method="get" action="/search" id="search"  >
					  <input name="q" type="text" size="40" placeholder="Phim..." />
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
						 <li class="active"><a href="index.html">Trang chủ</a></li>
						 <li><a href="single.html">Top Phim Lẻ</a></li>
						 <li><a href="single.html">Top Phim Bộ</a></li>
						 <li><a href="single.html">Top Phim Chiếu Rạp</a></li>
						 <li><a href="single.html">Diễn viên</a></li>
						 <li><a href="single.html">Đạo diễn</a></li>
						 <li><a href="single.html">Cảm Nhận</a></li>
						 
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
							<center><h2>REVIEW MOVIE</h2></center>
						</div>
						<ul>
							<li>
								<select>
									<option value="audi" selected>Hình thức</option>
									<option value="volvo">Tất cả</option>
									<option value="saab">Phim Lẻ</option>
									<option value="volvo">Phim Bộ</option>
									<option value="saab">Phim chiếu rạp</option>
									
								</select>
								<select>
									<option value="audi" selected>Thể loại</option>
									<option value="volvo">Phim hoạt hình</option>
									<option value="saab">Phim kinh dị</option>
									<option value="volvo">Phim viễn tưởng</option>
									<option value="saab">Phim gia đình</option>
									<option value="volvo">Phim hài hước</option>
									<option value="saab">Phim võ thuật</option>
									<option value="volvo">Phim cổ trang</option>
									<option value="saab">Phim tâm lí</option>
									<option value="volvo">Phim hồi hôp- gay cấn</option>
									<option value="saab">Phim thể thao- âm nhạc</option>
								</select>
								<select>
									<option value="audi" selected>Ngôn Ngữ</option>
									<option value="volvo">Thuyết minh</option>
									<option value="saab">Vietsub</option>
									
								</select>
								<select>
									<option value="audi" selected>Quốc Gia</option>
									<option value="volvo">Việt Nam</option>
									<option value="saab">Trung Quốc</option>
									<option value="volvo">Hàn Quốc</option>
									<option value="saab">Thái Lan</option>
									<option value="volvo">Đài Loan</option>
									<option value="saab">Úc</option>
									<option value="volvo">Mỹ</option>
									<option value="saab">Anh</option>
									<option value="volvo">Canada</option>
									<option value="saab">Nhật Bản</option>
								</select>
							</li>
							<li><a class="button " href="#">Search</a></li>
						</ul>
					</div>
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
					<center><div class="pagination">
						<a href="#" class="page gradient">first</a><a
						href="#" class="page gradient">2</a><a href="#"
						class="page gradient">3</a><span class=
						"page active">4</span><a href="#" class=
						"page gradient">5</a><a href="#" class=
						"page gradient">6</a><a href="#" class=
						"page gradient">last</a>
					</div></center>
				</div>
				<div class="serie">
					<div class="row type">
						<div class="title">
							<center><h2>SERIE</h2></center>
						</div>
						
					</div>
					<div class="row">
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									  <img class="thumb" src="images/anh10.jpg"  /> 
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a>  
									  </div>  
									</div>
									<a href="single.html"><h3>Hoàng tử giáng sinh</h3></a>
									<span>A Chirstmas Prince 2: T..</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									  <img class="thumb" src="images/anh11.jpg"  /> 
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a> 
									  </div>  
									</div>
									<a href="single.html"><h3>Diệp vấn: Cửu Long..</h3></a>
									<span>Ip Man and Four Kings</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									 <img class="thumb" src="images/4.jpg"  /> 
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a> 
									  </div>  
									</div>
									<a href="single.html"><h3>Film's Name</h3></a>
									<span>Lorem ipsum dolor sit</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect"> 
									  <img class="thumb" src="images/11.jpg"  />  
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a> 
									  </div>  
									</div>
									<a href="single.html"><h3>Film's Name</h3></a>
									<span>Lorem ipsum dolor sit</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									  <img class="thumb" src="images/12.jpg"  />   
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a> 
									  </div>  
									</div>
									<a href="single.html"><h3>Film's Name</h3></a>
									<span>Lorem ipsum dolor sit</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									  <img class="thumb" src="images/13.jpg"  />   
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a>  
									  </div>  
									</div>
									<a href="single.html"><h3>Film's Name</h3></a>
									<span>Lorem ipsum dolor sit</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									  <img class="thumb" src="images/19.jpg"  /> 
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a>  
									  </div>  
									</div>
									<a href="single.html"><h3>Film's Name</h3></a>
									<span>Lorem ipsum dolor sit</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="post">
									<div class="view effect">  
									  <img class="thumb" src="images/20.jpg"  />   
									  <div class="mask">  
										<a href="single.html" class="info" title="Full Image"><img src="images/play_button_64.png" /></a>  
									  </div>  
									</div>
									<a href="single.html"><h3>Film's Name</h3></a>
									<span>Lorem ipsum dolor sit</span>
								</div>
							</div>
						</div>
					</div>
					<center><div class="pagination">
						<a href="#" class="page gradient">first</a><a
						href="#" class="page gradient">2</a><a href="#"
						class="page gradient">3</a><span class=
						"page active">4</span><a href="#" class=
						"page gradient">5</a><a href="#" class=
						"page gradient">6</a><a href="#" class=
						"page gradient">last</a>
					</div></center>
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
				<div class="widget wid-post">
					<div class="wid-header">
						<h5>Phim nổi bật</h5>
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
				<div class="widget wid-last-updates">
					<div class="wid-header">
						<h5>Mới cập nhật</h5>
					</div>
					<div class="wid-content">
						<div class="post">
							<a href="#"><img src="images/1.jpg"/></a>
							<div class="wrapper">
							  <a href="#"><h6>A Blue Morning</h6></a>
							
							  <a href="#"><img src="images/star.png" /></a>
							</div>
						</div>
						<div class="post">
							<a href="#"><img src="images/2.jpg"/></a>
							<div class="wrapper">
							 <a href="#"><h6>A Blue Morning</h6></a>
							
							  <a href="#"><img src="images/star.png" /></a>
							</div>
						</div>
						<div class="post">
							<a href="#"><img src="images/3.jpg"/></a>
							<div class="wrapper">
							 <a href="#"><h6>A Blue Morning</h6></a>
						     <a href="#"><img src="images/star.png" /></a>
							</div>
						</div>
					</div>
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

