<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/myJS.js"></script>
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
	<title> I~Cha! </title>
</head>
<body class="bg-info">
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#">I~<b>Cha!</b></a>  		
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
			<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="aboutus.php" class="nav-link">About Us</a></li>			
		</ul>
		<ul class="nav navbar-nav navbar-right ml-auto">			
			<li class="nav-item">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="login_handler.php" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" name="username" required="required">
							</div>
							<div class="form-group">
								<input type="password" id="myInput" class="form-control" placeholder="Password" name="password" required="required">
								<input type="checkbox" onclick="showPassword()">Show Password
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Login">
						
						</form>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Sign up</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="register_handler.php" method="post">
							<p class="hint-text">Fill in this form to create your account!</p>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" name="username" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Confirm Password" name="password2" required="required">
							</div>
							<div class="form-group">
								<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="submit">
						</form>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>


