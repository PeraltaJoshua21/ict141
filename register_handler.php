 <?php           

require("connect.php");

    if(isset($_POST['submit']));
    {
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']);
      $password2 = mysqli_real_escape_string($db,$_POST['password2']);
      $userType = 1;
      if($password == $password2){

        $sql = "INSERT INTO user(username, password, date_created, userType) VALUES ('$username','$password', CURDATE(),'$userType')";
        $result =  mysqli_query($db,$sql);

           if($result){
            echo"<script>alert('You have successfully registered!')
            		window.location='index.php'</script>";
           }else{
             echo mysqli_error($db);
           }
      }
    }
    
?>