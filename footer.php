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
<!-- //scrolling script --