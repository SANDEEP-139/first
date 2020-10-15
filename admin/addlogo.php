<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('footer.php');?>
<?php include('connection.php');?>
<?php
if(isset($_POST['submit'])){
	  $file=$_FILES['fileupload'];
      $file_name = $_FILES['fileupload']['name'];
      $file_size =$_FILES['fileupload']['size'];
      $file_tmp =$_FILES['fileupload']['tmp_name'];
      $file_type=$_FILES['fileupload']['type']; 
	  $sql="INSERT INTO logo (fileupload) values ('$file_name')";
	  $res=mysqli_query($conn,$sql);
	  if($res==true){
    move_uploaded_file($file_tmp,"uploads/".$file_name);
         
		 echo "<script>alert('logo uploaded')</script>";
      }
	  else{
		   echo "<script>alert('logo  not uploaded')</script>";
	  }
 }
?>

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Forms</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Basic Form :</h4>
						</div>
						<div class="form-body"> 
							<form action="addlogo.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileupload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
					</div>
				</div>
			</div>
		</div>
<div class="container">
	<div class="row">
		<div  class="col-md-12">
			<div class="table">
				<table class="table table-responsive">	
					<tr>
					<td>Serial </td>
					<td>File upload</td>
					<td>Action</td>
					</tr>
					<?php
					$res="SELECT * from logo where id=3";
					$result = mysqli_query($conn, $res);
					foreach($result as $row){
					?>
					<tr>
					    <td><?php echo $row['meta_id'];?></td>
						<td><?php echo $row['fileupload'];?></td>
						<td><button class="btn btn-success">Edit</button></td>
						<td><a href="edit1.php?id=<?php echo $row['meta_id'];?>"><button class="btn btn-success" name="delete">Edit</button></td></a>
						<td>Edit</a>| <a href='delete.php?id=<?php echo $row['id']?>'>Delete</a></td></tr>
					</tr>
					<?php  
					}?>
				</table>

			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>
	
	