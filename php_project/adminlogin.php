<?php
session_start();
$name=$_POST["name"];
$password=$_POST["password"];
$name1='krish';
$password1='123';
if($name==$name1 && $password==$password1)
{
    header("Location:adminmain.php");
    $_SESSION["adminname"]='krish';
    exit;
}
echo "<script> alert('Incorrect Admin Details'); window.location.href='adminlogin.html';</script>"
?>