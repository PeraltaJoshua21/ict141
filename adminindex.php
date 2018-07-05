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
	</div>
	<div id="content"> <h1>Good day! Administrator</h1> </div>

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
<?php include("footer.php");?>