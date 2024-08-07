<?php
    //include 'dbconn.php';
    $server_name="localhost";
    $username="root";
    $password="";
    $dbname="krish_db";
    $conn=mysqli_connect($server_name, $username, $password, $dbname);
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $village=$_POST['village'];
        $mandal=$_POST['mandal'];
        $district=$_POST['district'];
        $mobile=$_POST['mobile'];
        $pin=$_POST['pin'];
        $country=$_POST['country'];
        $sql = "INSERT INTO buy_tbl (email,gender,village,mandal,district,mobile,pin,country) VALUES ('$email','$gender','$village','$mandal','$district','$mobile','$pin','$country')";
        $result =mysqli_query($conn,$sql);
        if($result){
            echo "<script>window.location.href='ordersuccess.html';</script>";
        }
        else{
            echo "Error in buyPage";
        }
    }
    $conn->close();
?>
    