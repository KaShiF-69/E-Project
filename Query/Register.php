<?php
    include("connect.php");
    if(isset($_POST['sub'])){
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $password = $_POST['pass'];
        $phone = $_POST['phone'];
        $role="user";
        $query="insert into users(name,email,password,phone,role)values('$name','$email','$password','$phone','$role')";
        $run=mysqli_query($conn,$query);
        if($run){
            echo "<script>alert('Data Inserted')</script>";
        }else{
            echo "<script>alert('Data not Inserted')</script>";
        }
    }
?>