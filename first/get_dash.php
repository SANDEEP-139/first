<?php
include('admin/connection.php');


if(isset($_POST['SignIn'])){
$email=$_POST['email'];
$pass=$_POST['password'];
$sql="select * from signup where email='$email' and password='$pass'";	
$res=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($res);
if($rows==1){
	$_SESSION["email"]=$email;
	header("location:admin/index.php");
}
else{
	echo "<script>alert('Invailid')</script>";
}

}
?>
