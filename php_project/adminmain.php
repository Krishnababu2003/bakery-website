<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONLINE BACKERY STORE</title>
	<link rel="stylesheet" type="text/css" href="style7.css">
</head>
<body>
	<header>
		<nav>
			<h2 class="logo"></h2>
			<ul>
				<?php
				if(isset($_SESSION["adminname"]))
				{
					$adminname=$_SESSION["adminname"];
				?>
				<a href="usersdata.php"><li>USERS DATA</li></a>
				<a href="contactsdata.php"><li>CONTACTS DATA</li></a>
				<a href="registerdata.php"><li>REGISTER USERS</li></a>
				<a href="#"><?php echo "Hi"?>&ensp;<?php echo $adminname?>
				<a href="adminlogout.php"><li>LOGOUT</li></a>
				<?php
			    }
				else
				{
				?>
				<a href="adminlogin.html"><li>ADMIN LOGIN</li></a>
				<a href="main.php"><li>USERS LOGIN</li></a>
				<a href="adminlogin.html"><li>USERS DATA</li></a>
				<a href="adminlogin.html"><li>CONTACTS DATA</li></a>
				<a href="adminlogin.html"><li>REGISTER USERS</li></a>
				<?php
				}
			    ?>
		    </ul>
		</nav>
		<div class="banner">
		</div>
	</header>
	<footer class="ft">
		<center><p>Copyright<sup>&copy;</sup> 2023 - ONLINE BACKERY STORE | JK's</p></center>
	</footer>
</body>
</html>