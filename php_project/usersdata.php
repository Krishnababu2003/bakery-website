<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <style>
        /*table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }*/
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

    $sql="SELECT * FROM buy_tbl";
    $result =mysqli_query($conn, $sql);
    if($result->num_rows>0) 
    {
        echo "<table>";
        echo "<tr><th>EMAIL</th><th>GENDER</th><th>VILLAGE</th><th>MANDAL</th><th>DISTRICT</th><th>MOBILE</th><th>PIN</th><th>COUNTRY</th></tr>";
        while($row = $result->fetch_assoc()) 
        {
        echo "<tr><td>" . $row["email"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["village"] . "</td><td>" . $row["mandal"] . "</td><td>" . $row["district"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row["pin"] . "</td><td>" . $row["country"] . "</td></tr>";
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

