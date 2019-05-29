<!DOCTYPE html>
<html lang="en">
<head>
	<!-- 
+	1. Fixed NavBar:
	   1.1. Logo (Desktop + Mobile).
	   1.2. Links (Desktop + Mobile).
+	2. Background + Text (Desktop + Mobile): !!!
	   2.1. Text (Desktop + Mobile).
	   2.2. Date (Desktop + Mobile).
	   2.3. "Trusted" Badge (Desktop + Mobile).
	3. Home-Page Filter (Desktop + Mobile):
	   3.1. View all + 5 games.
	   3.2. Multi-choise.
	   3.3. Static table-header.
	   3.4. "Editors choise" for 1st cell.
	   3.5. Rating.
+	4. Subscribe.
	5. Footer scrolling text (Desktop + Mobile).
	6. Footer NavBar. Goes to Fixed Navbar after 768px.
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
					<li><a href="javascript:void(0);">How we score?</a></li>
					<!-- 
					<li><a href="javascript:void(0);">Blackjack</a></li>
		            <li><a href="javascript:void(0);">Roulett</a></li>
		            <li><a href="javascript:void(0);">Poker</a></li>
		            <li><a href="javascript:void(0);">Baccarat</a></li>
		            <li><a href="javascript:void(0);">Slots</a></li> -->
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
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-10 website-background-text">
				<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptatibus hic dignissimos, dolorem recusandae fugiat blanditiis eveniet incidunt, pariatur quibusdam quam facilis, voluptatum, tenetur et quia eos aspernatur non. Sapiente perferendis error assumenda pariatur harum tempora autem, ullam blanditiis quibusdam.</h1>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-2 website-background-trusted-and-date">
				<div class="trusted">
					<img src="img/trusted.png" alt="Trusted Choise" width="100%">
				</div>
				<div class="date">
					<span id="current_date"></span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="filter-index">
	<div class="filter" id="filter">
		<div class="container">
			<div class="filter-main">
				<ul class="filter-list filter-header">
					<li filter="all" class="filter_active"><a href="#">View all</a></li>
					<li filter="bl"><a href="#"><img src="img/filter_1.png" alt="Filter logo" width="100%;">Blackjack</a></li>
					<li filter="r"><a href="#"><img src="img/filter_2.png" alt="Filter logo" width="100%;">Roulette</a></li>
					<li filter="p"><a href="#"><img src="img/filter_3.png" alt="Filter logo" width="100%;">Poker</a></li>
					<li filter="ba"><a href="#"><img src="img/filter_4.png" alt="Filter logo" width="100%;">Baccarat</a></li>
					<li filter="s"><a href="#"><img src="img/filter_5.png" alt="Filter logo" width="100%;">Slot</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="table-header">
		<div class="container ">
			<div class="table-header-items">
				<div class="table-header-item-1-number"><span>#</span></div>
				<div class="table-header-item-2-casino"><span>Casino</span></div>
				<div class="table-header-item-3-address"><span>Address</span></div>
				<div class="table-header-item-4-rating"><span>Rating</span></div>
				<div class="table-header-item-5-score"><span>Our Score</span></div>
				<div class="table-header-item-6-visit"><span></span></div>
			</div>
		</div>
	</div>

	<div class="hotels" id="hotels">
		<div class="container">
			<div class="filter-body">
				<div filter="bl, s" class="cards card-item cards-mob" id="card-1">
					<div class="card-item-1-number">
						<div class="editors-choice">
							<img src="img/badge-with-a-star.png" alt="Editors choise" width="100%">
						</div>
						<span>1</span>
					</div>
					<div class="card-item-2-casino">
						<a href="#">
							<img src="img/casino-img.png" alt="Hotel Logo" width="100%" class="hotel-logo-desktop">
							<img src="img/bad_bentheim_casino.png" alt="Hotel Logo" width="100%"
							class="hotel-logo-mobile">
						</a>
					</div>
					<div class="card-item-3-address">
						<span>
							<p>6380 Fallsview BLVD. PO Box 300 Niagara Falls, ON L2G 7X5</p>
						</span>
					</div>
					<div class="card-item-4-rating">
						<div class="bc-star-rating">
							<div class="ratings">
								<div class="rate_message"></div>
								<div class="rating not-rated" data-rate-value="2"></div>
								<div class="rated-info">
									<p>Rated: <strong class="rated">604</strong></p>
									<a href="review-all.html">Review</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card-item-5-score">
						<div class="our-score-total">
							<span>9.8</span>
							<p>Our Score</p>
						</div>
					</div>
					<div class="card-item-6-visit">
						<button>
						<a href="#">
							Visit
							<span>
								<img src="img/arrow.png" alt="Visit Website" width="100%">
							</span>
						</a>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="subscribe-form">
    <form>
        <input type="email" id="subscribe-email" placeholder="Enter e-mail" class="wow fadeInLeft" data-wow-delay="0.5s">
        <button id="signup-button">Subscribe</button>
        <label for="subscribe-email" class="subscribe-message error">
            <span class="message-content"></span>
            <span class="message-content-err"></span>
        </label>
    </form>
</section>

<?php include "components/javascript.php";?>
</body>
</html>