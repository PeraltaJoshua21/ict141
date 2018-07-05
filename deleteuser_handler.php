<?php
include("connect.php");
$delete_id=$_GET['del'];
$delete_query="DELETE FROM user WHERE user_id='$delete_id'";
$run=mysqli_query($db,$delete_query);
if($run)
{
	echo "<script> 
		window.location='users.php';
		</script>";
}

?>