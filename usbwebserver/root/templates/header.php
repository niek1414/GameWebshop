<?php 
	include('functions/login.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<meta charset="UTF-8">
		<title>Gameshop</title>
	</head>
	
	<body>
		<div id="container">
			<div id="left-wrapper">
				<div id="header">
					<div id="logo">
					</div>
					<div id="login">
					<div id="login-wrapper">
						<form action="#" method="post">
							<div class="signleft">Gebruikersnaam</div>
							<div class="signright"><input type="text" name="username"></div>
							<div class="signleft">Wachtwoord</div>
							<div class="signright"><input type="text" name="password"></div>
							<div class="signleft">
								<input type="checkbox" name="remember" value="true"> Onthouden 
								
								<a href="./forgot.html">Vergeten?</a>
							</div>
							<div class="signright">
								<input id="login-button" type="submit" name="action" value="Log in">
								<a href="./register.php">Registreren</a>
							</div>
						</form>
						</div>
					</div>
				</div>
				<div id="main">
					<div id="navbar">
						<ul class="clearfix">
							<li><a href="./index.php">Nieuws</a></li>
							<li><a href="./deals.php">Acties</a></li>
							<li><a href="./about.php">Over Ons</a></li>
							<li><a href="./jobs.php">Vacatures</a></li>
							<li><a href="./webshop.php">Webshop</a>
								<ul>
									<li><a href="./webshop.php">Producten</a></li>
									<li><a href="./cart.php">Winkelwagen</a></li>
									<li><a href="./checkout.php">Afrekenen</a></li>
								</ul>
							</li>
						</ul>
					</div>