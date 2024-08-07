<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONLINE BACKERY STORE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<h2 class="logo"></h2>
			<ul>
				<?php
				if(isset($_SESSION["name"]))
				{
					$name = $_SESSION["name"];
					?>
					<a href="products.html"><li>PRODUCTS</li></a>
				    <a href="about.html"><li>ABOUT US</li></a>
				    <a href="contact.html"><li>CONTACT</li></a>
					<a href="#"><?php echo "Hi"?>&ensp;<?php echo $name?></a>
					<a href="userlogout.php"><li>LOGOUT</li></a>
					<?php
				}
				else{	
				?>
				<a href="login.html"><li>PRODUCTS</li></a>
				<a href="login.html"><li>ABOUT US</li></a>
				<a href="login.html"><li>CONTACT</li></a>
				<a href="login.html"><li>LOGIN</li></a>
				<a href="signup.html"><li>SIGNUP</li></a>
				<a href="adminmain.php"><li>ADMIN</li></a>
				<?php
			}
			?>
		    </ul>
		</nav>
		<div class="banner">
		</div>
	</header>
	<div class="row">
		<div class="card" style="background-color: orange;">
			<h2>Freshly Baked Cakes</h2>
			<p>Get a taste of our freshly prepared cakes by order online!</p>
			
		</div>
		<div class="card" style="background-color: white;">
			<h2>Customize Your Cake</h2>
			<p>&ensp;&ensp;You can customize your cake with your favourite glazing,<br>toppings,color and more! </p>
			
		</div>
		<div class="card" style="background-color: rgba(22, 230, 11, 0.896)">
			<h2>Custom Cake Box</h2>
			<p>&ensp;&ensp;You can add different types cakes in a box and we deliver <br>it to you! </p>
		</div>
	</div>
	<footer class="ft">
		<center><p>Copyright<sup>&copy;</sup> 2023 - ONLINE BACKERY STORE | JK's</p></center>
	</footer>
</body>
</html>