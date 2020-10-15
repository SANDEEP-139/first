<?php
include('connection.php');
if(isset($_POST["delete"])){
	$sql="DELETE FROM logo where meta_id='$meta_id'";
}
?>