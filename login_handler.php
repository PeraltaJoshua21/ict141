<?php 
	session_start();
	include("connect.php");

	if(isset($_POST['Login']));
	{
		 	$username=$_POST['username'];
		    $password=$_POST['password'];

		    $check="SELECT * from user WHERE username='$username' AND password='{$password}'";

		    $run=mysqli_query($db,$check);

		     while($row = mysqli_fetch_assoc($run)){
              $user_id= $row['user_id'];
              $username = $row['username'];
              $password = $row['password'];
              $userType = $row['userType'];
 
            if(isset($_POST['password'])){
              if($_POST['username'] == $username && ($_POST['password']) == $password && $userType == 1){
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                header("location: memberindex.php");
              } 
              else if($_POST['username'] == $username && ($_POST['password']) == $password && $userType == 2){
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                header("location: adminindex.php"); 
              }
            }
    	}
    }
?>