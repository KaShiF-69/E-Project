<?php
    include "connect.php";
    $id=$_GET['user_id'];
    $delete_query = "DELETE FROM users WHERE user_id='$id'";
    $run=mysqli_query($conn,$delete_query);
    if($run){
        echo "<script>alert('Data Deleted!'); window.location.href = '../users-view.php';</script>";
    }
    else{
        echo "<script>alert('Data Not Deleted!')</script>";
    }

?>