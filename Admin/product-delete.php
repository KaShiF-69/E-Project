<?php

    include "connect.php";
    $id=$_GET['item_id'];
    $delete_query = "DELETE FROM inventory WHERE item_id='$id'";
    $run=mysqli_query($conn,$delete_query);
    if($run){
        echo "<script>alert('Data Deleted!'); window.location.href = '../products-view.php';</script>";
    }
    else{
        echo "<script>alert('Data Not Deleted!')</script>";
    }

?>