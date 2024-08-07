<?php
    $server_name="localhost";
    $username="root";
    $password="";
    $dbname="krish_db";

    $conn=mysqli_connect($server_name, $username, $password, $dbname);
    if(!$conn){
        die("connoction failed:".mysqli_connect_error());
    }
    
?>