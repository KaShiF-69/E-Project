<?php
    include "connect.php";
    $id=$_GET['contact_id'];
    $delete_query = "DELETE FROM contact_us WHERE contact_id='$id'";
    $run=mysqli_query($conn,$delete_query);
    if($run){
        echo "<script>alert('Data Deleted!'); window.location.href = '../contactform-view.php';</script>";
    }
    else{
        echo "<script>alert('Data Not Deleted!')</script>";
    }

?>