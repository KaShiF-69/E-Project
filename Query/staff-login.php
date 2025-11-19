<?php
  include("connect.php");
  if(isset($_POST['sub'])){
      $email = $_POST['mail'];
      $password = $_POST['pass'];
      $query="Select * from staff where email='$email' AND password='$password'";
      $run=mysqli_query($conn,$query);
      $row=mysqli_num_rows($run);
      if($row>0){
        echo "<script>alert('Login Successful')</script>";
        echo "<script>window.location.href='staff-dash.php'</script>";
        }else{
          echo "<script>alert('Invalid Email or Password')</script>";
        }
     
  }

?>