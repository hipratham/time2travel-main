<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="time2travel";
   

    $conn=mysqli_connect($servername,$username,$password,$dbname);
 
    if($conn)
    {
        // echo "Connected successfully";
    }
    else
    {
        echo "Connection failed".mysqli_connect_error();
    }

?> 
