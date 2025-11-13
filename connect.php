<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $d_name = "elegance_salon";

    $conn=mysqli_connect($servername, $username, $password, $d_name);
    if(!$conn){
        echo "Connect Error";
    }
?>