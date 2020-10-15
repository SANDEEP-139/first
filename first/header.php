<?php
include('admin/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Food Chef a Hotel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food Chef Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>	
		
<link rel="stylesheet" href="css/lightbox.css">
		
<!-- //custom-theme files-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme files-->

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->

<!-- googlefonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //googlefonts -->
<style>
.logo {
    height: 61px;
    margin-top: -20px;
    width:100%;
}
</style>
</head>
<body>

<!-- banner -->
<div id="home" class="w3ls-banner"> 
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">
						<div class="banner-dott">
							<div class="container">
								<div data-aos="fade-left" class="agileits-banner-info">
									<h3>Welcome to our</h3>
									<h3>Restaurant</h3>
									<p>Lorem ipsum dolor sit</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="banner-dott">
							<div class="container">
								<div data-aos="fade-left" class="agileits-banner-info">
									<h3>Welcome to our</h3>
									<h3>Restaurant</h3>
									<p>Lorem ipsum dolor sit</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
						<div class="banner-dott">
							<div class="container">
								<div data-aos="fade-left" class="agileits-banner-info">
									<h3>Welcome to our</h3>
									<h3>Restaurant</h3>
									<p>Lorem ipsum dolor sit</p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
										</div>
								</div>
								
							</div>
						</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<div class="rotate">
					<a href="#about" class="scroll">
						<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
					</a>
				</div>
			</div>
 
</div>	
<!-- //banner --> 
<!-- header -->
<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">FoodChef</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="home.php">
						<?php
						$res="SELECT fileupload FROM logo WHERE DT IN(SELECT MAX(DT) FROM logo)";
						$result = mysqli_query($conn, $res);
						foreach($result as $value){
								?>
								
							<span><img src="admin/uploads/<?php echo $value['fileupload'];?>" class="img -responsive logo"></span></a>	
    
						<?php
						 }
						?>
						
						
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
						<?php
							$menu="SELECT * FROM `menus`";
							$result = mysqli_query($conn, $menu);
							foreach($result as $row){
						 ?>
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll scroll" href=""></a>	</li>
							<li><a  href="<?php echo $row['menu_link'];?>"><?php echo $row['menu_name'];?></a></li>
	
							<?php
							}
							?>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
</div>	
<!-- //header -->
