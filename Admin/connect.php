<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $d_name = "elegancesalon";

    $conn=mysqli_connect($servername, $username, $password, $d_name);
    if(!$conn){
        echo "Connect Error";
    }
?>