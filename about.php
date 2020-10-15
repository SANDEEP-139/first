<?php include('header.php');?>
<!-- about -->
<div class="about" id="about">
	<div class="container">
		<div class="heading">
			<h2 data-aos="zoom-in">About Us</h2>
		</div>
	
		<?php
		include('admin/connection.php');
		$query="SELECT * FROM employee";
		$run=mysqli_query($conn,$query);
		if($run==true){
			?>
			<table border="1">
		<tr>
			<td><b>title</b></td>
			
			
			
		</tr>
		<?php
		while($data=mysqli_fetch_assoc($run))
		{
			?>
			
			
			<td><?php echo $data['title'];?></td>
			<?php
		}
	
		?>
		<?php
		}
		?>
			
		<p>Lorem ipsum dolor sit Proin elit metus, dapibus ac orci vitae.</p>
		<div class="about-grids">
			<div data-aos="zoom-in" class="col-md-4 aboutgrid1 ">
				<h3>Lorem ipsum dolor sitamet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas cursus ligula quismales uada placerat. </p>
			</div>
			<div  data-aos="flip-right" class="col-md-4 aboutgrid2">
				<img src="images/about1.jpg" alt="" />
			</div>
			<div data-aos="zoom-in" class="col-md-4 aboutgrid3">
				<h3>Lorem ipsum dolor sitamet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas cursus ligula quismales uada placerat. </p>
			</div>
			<div class="clearfix"></div>
			<div  data-aos="flip-right" class="col-md-4 aboutgrid4">
				<img src="images/about2.jpg" alt="" />
			</div>
			<div data-aos="slide-up" class="col-md-4 aboutgrid5">
				<h3>Lorem ipsum dolor sitamet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas cursus ligula quismales uada placerat. </p>
			</div>
			<div  data-aos="flip-right" class="col-md-4 aboutgrid6">
				<img src="images/about3.jpg" alt="" />
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about -->
<?php include('footer.php');?>