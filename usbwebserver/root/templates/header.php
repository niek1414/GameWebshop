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
                            <?php
								include('templates/login_form.php')
							?>
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