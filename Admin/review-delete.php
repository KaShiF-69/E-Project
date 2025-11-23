<?php

    include "connect.php";
    $id=$_GET['feedback_id'];
    $delete_query = "DELETE FROM feedback WHERE feedback_id='$id'";
    $run=mysqli_query($conn,$delete_query);
    if($run){
        echo "<script>alert('Data Deleted!'); window.location.href = '../reviews-view.php';</script>";
    }
    else{
        echo "<script>alert('Data Not Deleted!')</script>";
    }

?>