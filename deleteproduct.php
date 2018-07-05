<?php
include("connect.php");
$delete_id=$_GET['del'];
$delete_query="DELETE  from menu WHERE menu_id='$delete_id'";
$run=mysqli_query($db,$delete_query);
if($run)
{
	echo "<script> 
		window.location='products.php';
		</script>";
}

?>