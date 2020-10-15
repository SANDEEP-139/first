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












<!-- map -->
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99285.8587671662!2d-94.77019988161892!3d38.95406778222139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0ec985fa46073%3A0x178f7880c66a7a55!2sExtended+Stay+America+Hotel+Kansas+City+-+Lenexa+-+87th+St.!5e0!3m2!1sen!2sin!4v1494659289602"></iframe>
</div>
<!-- //map -->

<!-- subscribe -->
<div class="agileits_w3layouts_banner_info">
	<div class="container">
		<div data-aos="flip-right" class="col-md-7 subscribe-left">
			<h3>Subscribe to get the latest updates right to your inbox</h3>
		</div>
		<div data-aos="flip-left" class="col-md-5 subscribe-right">
			<form action="#" method="post"> 
				<input type="email" name="email" placeholder="Enter your Email..." required="">
				<input type="submit" value="Subscribe">
			</form>
		</div>
	</div>
</div>
<!-- subscribe -->

<!-- copyright -->
<div class="copyright">
	<div class="copyrighttop">
		
		<ul>
			<li><h4>Follow us on:</h4></li>
			<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a class="facebook" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
			<li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	<div class="copyrightbottom">
		<p>© 2017 Food Chef. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //copyright -->

<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Food Chef 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/food3.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 


<script src="js/lightbox-plus-jquery.min.js"> </script><!-- for gallery js -->
 
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
<!-- //js -->

 <!-- /Responsive slides js -->
						<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

 <!-- Responsive slides js -->
 
<!-- animation effects-js files-->
	<script src="js/aos.js"></script><!-- //animation effects-js-->
	<script src="js/aos1.js"></script><!-- //animation effects-js-->
<!-- animation effects-js files-->

<!-- //here starts scrolling icon -->
<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

</body>
</html>