<!DOCTYPE html>

<?php

	require 'php/dbconnect.php';
	session_start();

	$loggedIn = isset($_SESSION['name']);

	if ($loggedIn) {
		$customerEmail = $_SESSION['email'];
		$profileImgs = $connection->query("SELECT image_id FROM customers");
	}
	else {
		$profileImgs = null;
	}

	include 'php/get_product.php';

?>


<html lang="en">
<!--
Derek Will
CSCI-1145: HTML
February 3, 2017
Project 3: Project Site Wire frame
-->


<head>
<title>S-Mart: Shop Smart. Shop S-Mart.</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/style.css">

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="js/nav_dropdown.js"></script>
<script src="js/interaction.js"></script>
</head>

<body>

<header>
<div class="customer-navbar">
	<ul>
			<?php if ($loggedIn): ?>
		<li><a id="logged-in" href="account.php">Hi, <?=$_SESSION['name'] ?></a></li>
			<?php else: ?>
		<li><a id="login" href="register.php">LOGIN / REGISTER</a></li>
			<?php endif; ?>
		<li>CUSTOMER CARE</li>
		<li>CHECKOUT</li>
	</ul>
</div>

		<div class="login-modal inactive">
			<div class="signin-modal">
				<form action="php/login.php" method="post">
					<div class="login-email">
						<label for="email">Enter your email address:</label>
						<input type="text" id="email" name="email" />
					</div>
					<div class="login-pass">
						<label for="password">Enter your password:</label>
						<input type="password" id="password" name="password" />
					</div>
					<button>Sign In</button>
					<a class="close-button">close</a>
					<a class="register-button" href="register.php">create account</a>
				</form>
			</div>
		</div>

		<div class="logout-modal inactive">
			<div class="signout-modal">
				<p><a href="account.php">My Account</a></p>
				<p><a href="php/logout.php">Log Out</a></p>
				<p><a class="close-button">close</a></p>
			</div>
		</div>

<div class="branding">
	<div class="logo"><a href="index.php"><img src="images/logo_s-mart.png" /></a></div>
	<h1>Shop Smart.<br />Shop S-Mart!</h1>
	<img src="images/aod_cover.png" class="cover" />
</div>
</header>

<nav class="nav">
	<ul id="top-nav">
		<li id="home"><a href="index.php">home</a></li>
		<li id="products"><a href="all_products.php">products</a></li>
		<!-- <li id="smart"><a href="smart.php">s-mart</a></li> -->
		<!-- <li id="about"><a href="about.php">our story</a></li> -->
		<!-- <li id="contact"><a href="contact.php">contact us</a></li> -->
		<!-- <li id="newsletter"><a href="newsletter.php">s-letter</a></li> -->
		<li id="fanclub"><a href="fanclub.php">big fan?</a></li>
	</ul>

	<div id="sub-nav" class="inactive-nav">
		<div class="home-nav inactive-nav">
		</div><!-- end sub nav drop down div -->
		<div class="products-nav inactive-nav">
			<div class="subnav-column">
				<?php
					productsNavLinks($connection);
				?>
			</div><!-- end sub nav column -->
		</div><!-- end sub nav drop down div -->
		<div class="fanclub-nav inactive-nav">
		</div><!-- end sub nav drop down div -->
	</div><!-- end sub-nav container -->
</nav>