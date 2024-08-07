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
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $comment =$_POST['comment'];
        $sql = "INSERT INTO contact_tbl (name,email,mobile,comment) VALUES ('$name','$email','$mobile','$comment')";
        $result =mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>window.location.href='main.php';</script>";
        }
        else{
            echo "Error in contactPage";
        }
    }
    $conn->close();
?>
    
