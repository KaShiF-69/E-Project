<?php

    include "connect.php";
    $id=$_GET['appointment_id'];
    $delete_query = "DELETE FROM appointments WHERE appointment_id='$id'";
    $run=mysqli_query($conn,$delete_query);
    if($run){
        echo "<script>alert('Data Deleted!'); window.location.href = '../appointment-view.php';</script>";
    }
    else{
        echo "<script>alert('Data Not Deleted!'); window.location.href = '../appointment-view.php';</script>";
    }

?>