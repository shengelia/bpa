<!DOCTYPE html>
<html lang="en">
<head>
	<!-- 
	1. Fixed NavBar:
	   1.1. Logo (Desktop + Mobile).
	   1.2. Links (Desktop + Mobile).
	2. Background + Text (Desktop + Mobile): !!!
	   2.1. Text (Desktop + Mobile).
	   2.2. Date (Desktop + Mobile).
	   2.3. "Trusted" Badge (Desktop + Mobile).
	3. Home-Page Filter (Desktop + Mobile):
	   3.1. View all + 5 games.
	   3.2. Multi-choise.
	   3.3. Static table-header.
	   3.4. "Editors choise" for 1st cell.
	   3.5. Rating.
	4. Subscribe.
	5. Footer scrolling text (Desktop + Mobile).
	6. Footer NavBar. Goes to Fixed Navbar after 769px.
	 -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Home</title>
	<?php include "components/stylesheets.php";?>
</head>

<body>
<header>
	<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand website-logo" href="#"><img src="img/logo.png" alt="Website Logo" width="100%"></a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right no-lr-padding mobile-center-align">
					<li class="active"><a href="javascript:void(0);">Home</a></li>
					<li><a href="javascript:void(0);">Games</a></li>
					<!-- <li><a href="javascript:void(0);">Blackjack</a></li>
		            <li><a href="javascript:void(0);">Roulett</a></li>
		            <li><a href="javascript:void(0);">Poker</a></li>
		            <li><a href="javascript:void(0);">Baccarat</a></li>
		            <li><a href="javascript:void(0);">Slots</a></li> -->
					<li><a href="javascript:void(0);">How we score?</a></li>
					<li class="mobile-hidden"><a href="javascript:void(0);">Review</a></li>
		            <li class="mobile-hidden"><a href="javascript:void(0);">Cookies</a></li>
		            <li class="mobile-hidden"><a href="javascript:void(0);">Privacy Policy</a></li>
		            <li class="mobile-hidden"><a href="javascript:void(0);">About Us</a></li>
		            <li class="mobile-hidden"><a href="javascript:void(0);">Terms and Conditions</a></li>
		            <li class="mobile-hidden"><a href="javascript:void(0);">Contact Us</a></li>
				</ul>
	        </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>

<section class="website-background">
	
</section>


<?php include "components/javascript.php";?>
</body>
</html>