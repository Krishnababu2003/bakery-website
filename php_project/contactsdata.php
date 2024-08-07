<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4d7;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
$server_name="localhost";
$username="root";
$password="";
$dbname="krish_db";

$conn=mysqli_connect($server_name, $username, $password, $dbname);
if(!$conn)
{
    die("connoction failed:".mysqli_connect_error());
}

    $sql="SELECT * FROM contact_tbl";
    $result =mysqli_query($conn, $sql);
    if($result->num_rows>0) 
    {
        echo "<table>";
        echo "<tr><th>USERNAME</th><th>EMAIL</th><th>MOBILE</th><th>COMMENT</th></tr>";
        while($row = $result->fetch_assoc()) 
        {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row["comment"] . "</td></tr>";
        }  
        echo "</table>";
    }

    else
    {
        echo "Error".$sql;
    }
 $conn->close();
?>
</body>
</html>

