<?php    
    include("connect.php");
    if(isset($_POST['sub'])){
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $query="insert into contact_us (name,email,subject,message)values('$name','$email','$subject','$message')";
        $run=mysqli_query($conn,$query);
        if($run){
            echo "<script>alert('Message Submitted Successfully')</script>";
        }else{
            echo "<script>alert('Message Submission Failed')</script>";
        }
    } 
?>