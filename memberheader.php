<?php session_start();
if(!isset($_SESSION['username']))
{
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/cakeform.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/formcalculations.js"></script>
	<title> I~Cha! </title>
	<style type="text/css">		
	#panel, #flip, #panel1, #flip1, #panel2, #flip2, #branch1, #talamban, #branch2, #cdu, #branch3, #seaside {
	    padding: 5px;
	    text-align: center;
	    background-color: #e5eecc;
	    width: 60%;
	}

	#panel, #panel1, #panel2, #talamban, #cdu, #seaside{
	    padding: 50px;
	    display: none;
	}
	.background{
		text-align: justify;
	}
	.split {
    height: 100%;
    width: 50%;
    position: fixed;
    z-index: 1;
    overflow-x: hidden;
    margin-top: 120px;
	}

	.left {
	    left: 0;
	    background-color: teal;
	}

	.right {
	    right: 0;
	    background-color: white;
	}
	</style>
	<script type="text/javascript">
	$(document).ready(function(){
	    $("#flip").click(function(){
	        $("#panel").slideToggle("slow");
	     });
	});
	$(document).ready(function(){
	    $("#flip1").click(function(){
	        $("#panel1").slideToggle("slow");
	     });
	});
	$(document).ready(function(){
	    $("#flip2").click(function(){
	        $("#panel2").slideToggle("slow");
	     });
	});
		//JQUERY BRANCHES
	$(document).ready(function(){
	    $("#branch1").click(function(){
	        $("#talamban").slideToggle("slow");
	    });
	});
	$(document).ready(function(){
	    $("#branch2").click(function(){
	        $("#cdu").slideToggle("slow");
	    });
	});
	$(document).ready(function(){
	    $("#branch3").click(function(){
	        $("#seaside").slideToggle("slow");
	    });
	});
	</script>
</head>
<body class="bg-info">
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="memberindex.php">I~<b>Cha!</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="memberindex.php" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="memberproducts.php" class="nav-link">Our Menu</a></li>
			<li class="nav-item"><a href="memberaboutus.php" class="nav-link">About Us</a></li>
			<li class="nav-item"><a href="customize.php" class="nav-link">Customize Your Bingsu</a></li>				
		</ul>
		<ul class="nav navbar-nav navbar-right ml-auto">			
			<li class="nav-item">
				<a href="logout.php" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Logout</a>
			</li>
		</ul>
	</div>
</nav>
