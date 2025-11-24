<?php
  include("connect.php");
  if(isset($_POST['sub'])){
      $email = $_POST['mail'];
      $password = $_POST['pass'];
      $query="Select * from users where email='$email' AND password='$password'";
      $run=mysqli_query($conn,$query);
      $row=mysqli_num_rows($run);
      if($row>0){
        while($data=mysqli_fetch_array($run)){
         if($data['role'] == "staff"){
            echo "<script>window.location.href='staffdash.php'</script>";
         }
         else if($data['role'] == "admin"){
            echo "<script>window.location.href='admindash.php'</script>";
         }
         else if($data['role'] == "user"){
            echo "<script>window.location.href='index.php'</script>";
         }
         else{
            echo "<script>alert('Invalid Role')</script>";
         }
        }
     
  }
}
?>