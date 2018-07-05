<?php include ("adminheader.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<style type="text/css">

html {
	height: 100%;
}

body {
	margin: 0;
	height: 100%;
}

#main-container {
	display: table;
	width: 100%;
	height: 100%;
}

#sidebar {
	display: table-cell;
	width: 15%;
	vertical-align: top;
	background-color: teal;
}

#sidebar a {
	display: block;
	padding: 10px;
	color: black;
	margin: 15px 0 0 0;
	text-decoration: none;
	text-align: center;
}
#sidebar a:hover {
	background-color: rgba(255, 255, 255, 0.1);
	color: white !important;
}

#content {
	display: table-cell;
	width: 85%;
	vertical-align: top;
	padding: 10px 0 0 10px;
}

</style>
</head>

<body>

<div id="main-container">
	<div id="sidebar">
		<a href="users.php"><span class="glyphicon glyphicon-user"></span> Users</a>
		<a href="products.php"><span class="fa fa-list"></span> Our Products</a>
		<a href="orders.php"><span class="glyphicon glyphicon-shopping-cart"></span> Orders</a>
	</div>
	<div id="content">
		
<form method="GET" action="approval_handler.php"> 	
  <div class="container">
    <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
    <table id="suppliersTable" class="table table-bordered table-hover table-striped" style="table-layout: relative">
        <thead>

        <tr>
        	<th>Menu ID</th>
        	<th>Product Name</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>Action</th>
        </tr>
        </thead>

		<?php
	        include("connect.php");
	        $sql = "SELECT * FROM menu"; 
	        $result = mysqli_query($db,$sql);
	        while($row=mysqli_fetch_array($result))//while look to fetch the result and store in a array $row.
	        {
	        	$menu_id=$row[0];
	            $name=$row[1];
	         	$price = $row[2];
	            $img= $row[3];
	         
        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $menu_id;  ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $price;  ?></td>
            <td><?php echo $img;  ?></td>
          
            <div class="btn-group">
            <td>
				<a style="width: 90%" class="btn btn-danger" href="deleteorder_handler.php?del=<?php echo $order_id;?>" onclick="return confirm('Are you sure you want to delete this request?');">DELETE&nbsp;
  				<span class="glyphicon glyphicon-check"></span>
				</a>
			</td>
        </tr>
        <?php } ?>

    </table>
        </div>
</div>
</form>
</div>

</body>
</html>


	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="datatables/jquery.dataTables.min.js"></script>
	<script src="datatables/datatables.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#usersTable").DataTable();
	});
	</script>
