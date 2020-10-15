<?php include('header.php');?>
<!-- testimonial -->
<div class="testimonial" id="testimonials">
	<div class="container">
		<div class="heading">
			<h3 data-aos="zoom-in" >Testimonials</h3>
		</div>
			<div class="agileits-w3layouts-info">
				<div class="testimonial-grid">
					<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div data-aos="flip-down" class="col-md-6 testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Donec feugiat tellus sem, laoreet iaculis orci lobortis vel.Sed sed luctus elit vitae, 
												Sed sed luctus orci, at lacinia risus. Ut porttitor ante ac tincidunt elementum.
												Curabitur ex dolor,condi mentum vitae nunc vel.</p>
											<h5>John Smith <span>- Visitor</span></h5>
										</div>
										<div data-aos="flip-down" class="col-md-6 testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Donec feugiat tellus sem, laoreet iaculis orci lobortis vel. Sed sed luctus orci, elit vitae, 
												at lacinia risus. Ut porttitor ante ac tincidunt elementum. Curabitur ex dolor,
												condimentum vitae nunc vel, pulvinar semper justo..</p>
											<h5>John Smith <span>- Visitor</span></h5>
										</div>
									<div class="clearfix"></div>
									</li>
									<li>
										<div data-aos="flip-up" class="col-md-6 testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non 
												auctor diam. Mauris eget consectetur mauris. Aenean leo elit, accumsan vel elit vitae, 
												mattis ultricies lacus. Cras consectetur justo lorem.</p>
											<h5>Divid Rule <span>- Visitor</span></h5>
										</div>
										<div data-aos="flip-up" class="col-md-6 testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non 
												auctor diam. Mauris eget consectetur mauris. Aenean leo elit, accumsan vel elit vitae, 
												mattis ultricies lacus. Cras consectetur justo lorem.</p>
											<h5>Divid Rule <span>- Visitor</span></h5>
										</div>
									<div class="clearfix"></div>
									</li>
								</ul>
							</div>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
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
							<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
</div>
<!-- //testimonial -->
<?php include('footer.php');?>