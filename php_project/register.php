<?php
// include 'dbconn.php';
    $server_name="localhost";
    $username="root";
    $password="";
    $dbname="krish_db";

    $conn=mysqli_connect($server_name, $username, $password, $dbname);
    if(!$conn)
    {
        die("connoction failed:".mysqli_connect_error());
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO register_tbl (name,email,password) VALUES ('$name','$email','$password')";
    $result =mysqli_query($conn, $sql);
    if($result){
        // echo "<script>window.location.href='login.html';</script>";
        header("Location: login.html");
        exit;
    }
    else{
        echo "Error in signUP".$sql;
    }
}
$conn->close();
?>
