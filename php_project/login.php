<?php
session_start();
// include 'dbconn.php';
    $server_name="localhost";
    $username="root";
    $password="";
    $dbname="krish_db";

    $conn=mysqli_connect($server_name, $username, $password, $dbname);
    if(!$conn){
        die("connoction failed:".mysqli_connect_error());
    }
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM register_tbl WHERE name = '$name' AND password = '$password'";
    $result =mysqli_query($conn, $sql);
    if($result->num_rows==1)
    {
        $row = $result->fetch_assoc();
        if ($password == $row["password"] && $name==$row["name"]){
            $_SESSION["name"]=$row["name"];
        header("Location: main.php");
        exit;
    }
    }
    echo "<script> alert('Incorrect Login Details'); window.location.href='login.html';</script>";
    $conn->close();
}

