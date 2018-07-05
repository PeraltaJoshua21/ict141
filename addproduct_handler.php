<?php
require("connect.php");
session_start();

if(isset($_POST['submit']));
{

		$target_dir= "img/menu/";
		$target_file= $target_dir . basename($_FILES['prod_img']['name']);
		move_uploaded_file($_FILES['prod_img']['tmp_name'], $target_file);

			$prod_name 	= $_POST['name'];
			$price 		= $_POST['price'];

		
		$sql = "INSERT INTO menu(name, price, img) VALUES ('$prod_name','$price','$target_file')";
		$result = mysqli_query($db, $sql);
		// $last_id = mysqli_insert_id($conn);
		// $sql1 = "INSERT INTO prod_variant(prod_id,size,stock_count) VALUES ('$last_id','$size','$stock_count')";
		// $result1 = mysqli_query($conn, $sql1);
		// $prod_id = mysqli_insert_id($conn);
		// $sql2 = "INSERT INTO order_details(prodVariant_id) VALUES ('$prod_id')";
		// $result2 = mysqli_query($conn, $sql2);

						if($result){
							echo "<script>alert('You have successfully added a product!')
							window.location='products.php' </script>";
						}else{
							echo mysqli_error($db);
						}
}