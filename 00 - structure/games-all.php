<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Games</title>
	<?php include "components/stylesheets.php";?>
</head>

<body>
<?php include "components/header.php";?>

<section class="website-background">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-10 website-background-text">
				<h1>
					Vill du känna dig trygg, säker och avslappnad när du spelar på kasino? Då är kasinospecialiserade hotell destinationen för dig. Det är dags att upptäcka de bästa Kasinohotellen. Det tar inte lång tid!
				</h1>
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

<section class="games-filter">
	<div class="filter tab">
		<div class="container">
			<div class="row filter-main">
				<div class="col-md-12 col-12">
					<ul class="row filter-list filter-header filter-games">
						<li tab="all" class="col-25 col-50 filter-item">
							View all
						</li>
						<li tab="bl" id="gamesBl" class="active_filter col-25 col-50 filter-item">
							<a href="#"><img src="img/filter_1.png" alt="Filter logo" width="100%;">Blackjack</a>
						</li>
						<li tab="r" id="gamesR" class="col-25 col-50 filter-item">
							<a href="#"><img src="img/filter_2.png" alt="Filter logo" width="100%;">Roulette</a>
						</li>
						<li tab="p" id="gamesP" class="col-25 col-50 filter-item">
							<a href="#"><img src="img/filter_3.png" alt="Filter logo" width="100%;">Poker</a>
						</li>
						<li tab="ba" id="gamesB" class="col-25 col-50 filter-item">
							<a href="#"><img src="img/filter_4.png" alt="Filter logo" width="100%;">Baccarat</a>
						</li>
						<li tab="s" id="gamesS" class="col-25 col-50 filter-item">
							<a href="#"><img src="img/filter_5.png" alt="Filter logo" width="100%;">Slot</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="interior tab-body row_shadow ">
		<div class="row filter-body">
			<div class="game_info">
				<div class="container">
				<div class="col-12 tab-texts col-md-12 col-xl-12">
					<p tab="bl" class="game-text rm-link " id="info_blackjack">
						Blackjack! One of the most thrilling games in gambling industry. In fact, a mature player knows how to count the cards, is more likely to win the game. But not everyone is an expert. So here we wrote a brief rule of this game.
						<span id="dots">...</span>
						<span id="more">
						Each participant tries to beat the dealer, gaining as close as possible to 21, without passing it. Before starting the deal, each player bets in the form of chips in front of him in the designated area. Minimum and maximum limits are set on bets. When all players have placed their bets, the dealer gives one card face up to each player clockwise, and then one card face up to him.
						</span>
						<button onclick="myFunction()" id="myBtn">Read more</button>
					</p>

					<p tab="r" class="game-text rm-link" id="info_roulette">
					    Roulette is the most knowable symbol of the casino. It posturizes a rotating disk with divisions along the edge, which rotates around the base of the bowl. A ball is spun around the outside of the bowl.
					    <span id="dots1">...</span>
					    <span id="more1">
                        Eventually ball and wheel come to rest with the ball in one of the divisions. Roulette players are offered various betting options. Placing inside bets is either choosing the exact number of pockets the ball will hit or a small range of pockets depending on their proximity to the layout. Players wishing to bet "outside" will choose to bet on larger pocket positional groups, the color of the pocket, or whether the winning number is odd or even.
                        </span>
                        <button onclick="myFunction1()" id="myBtn1">Read more</button>
					</p>

					<p tab="p" class="game-text rm-link" id="info_poker">
						A casino cannot be called real casino without poker. This game is notable for the fact that, on the one hand, it is a gamble, and on the other hand, it is undoubtedly intellectual.
						<span id="dots2">...</span><span id="more2">
						Unlike many other games, success here depends not only on your luck, but, of course, on your skills. In many countries of the world, certain types of poker have been recognized as skill games. Therefore, in order to learn how to play well, you need to take a step forward and start playing. Because knowledge without practice makes but half an artist.
						</span>
						<button onclick="myFunction2()" id="myBtn2">Read more</button>
					</p>

					<p tab="ba" class="game-text rm-link" id="info_baccarat">
						If you are a high roller, then this game is intended to you! High stakes are usually played in a separate living room, which creates a feeling of privacy and security.
						<span id="dots3">...</span><span id="more3">
						The rules of the game are completely simple. Baccarat has three possible outcomes:<br/>
						Winning player, winning banker and a draw.<br/>
						Please note that the "banker" does not apply to the house. The participants of the game have the opportunity to bet either on the player or on the hand of the banker.
						</span>
						<button onclick="myFunction3()" id="myBtn3">Read more</button>
					</p>

					<p tab="s" class="game-text rm-link" id="info_slot">
						Slots machines are one of the most wide-spread games in casinos. It is a devise with three or more reels that rotate at the touch of a button.
						<span id="dots4">...</span><span id="more4">
						The goal of the game is simple-win money from the car! A game usually includes matching symbols, either on mechanical drums that spin and stop to reveal one or more symbols, or on simulated drums, which are demonstrated on a video screen. These symbols posturize bells, diamonds, hearts and etc. They are painted in bright colors. Casino industry does not stand in one place. New slot machines can use animated cartoon characters and images of popular actors or singers.</span>
                  		<button onclick="myFunction4()" id="myBtn4">Read more</button>
					</p>
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

			<div class="col-12 col-md-12 col-xl-12 tab-cards">
				<div class="container">
				<!-- 1 -->
				<div tab="all,bl,s" class="row active card hotels-stars cards card-item cards-mob" id="card-1">
					<div class="card-item-1-number">
						<div class="editors-choice">
							<span>Editor Picks</span>
						</div>
						<span>1</span>
					</div>
					<div class="card-item-2-casino">
						<a href="#">
							<img src="img/casino-logo.svg" alt="Hotel Logo" width="100%" class="casino-logo">
						</a>
					</div>
					<div class="card-item-3-address">
						<span>
							<p>6380 Fallsview BLVD. PO Box 300 Niagara Falls, ON L2G 7X5</p>
						</span>
					</div>
					<div class="card-item-4-rating">
						<div class="ratings">
							<div class="rate_message"></div>
							<div class="rating not-rated" data-rate-value="3"></div>
							<div class="rated-info">
								<a href="">Review</a>
							</div>
						</div>
					</div>
					<div class="card-item-5-score">
						<div class="our-score">
							<span>9.8</span>
							<p>Our score</p>
						</div>
					</div>
					<div class="card-item-6-visit">
						<button>
							<a href="#">Visit Site</a>
						</button>
					</div>
				</div>
				<!-- 2 -->
				<div tab="bl" class="row active card hotels-stars cards card-item cards-mob" id="card-2">
					<div class="card-item-1-number">
						<span>2</span>
					</div>
					<div class="card-item-2-casino">
						<a href="#">
							<img src="img/casino-logo.svg" alt="Hotel Logo" width="100%" class="casino-logo">
						</a>
					</div>
					<div class="card-item-3-address">
						<span>
							<p>6380 Fallsview BLVD. PO Box 300 Niagara Falls, ON L2G 7X5</p>
						</span>
					</div>
					<div class="card-item-4-rating">
						<div class="ratings">
							<div class="rate_message"></div>
							<div class="rating not-rated" data-rate-value="3"></div>
							<div class="rated-info">
								<a href="">Review</a>
							</div>
						</div>
					</div>
					<div class="card-item-5-score">
						<div class="our-score">
							<span>9.8</span>
						</div>
					</div>
					<div class="card-item-6-visit">
						<button>
							<a href="#">Visit Site</a>
						</button>
					</div>
				</div>
				<!-- 3 -->
				<div tab="all,s" class="row active card hotels-stars cards card-item cards-mob" id="card-3">
					<div class="card-item-1-number">
						<span>3</span>
					</div>
					<div class="card-item-2-casino">
						<a href="#">
							<img src="img/casino-logo.svg" alt="Hotel Logo" width="100%" class="casino-logo">
						</a>
					</div>
					<div class="card-item-3-address">
						<span>
							<p>6380 Fallsview BLVD. PO Box 300 Niagara Falls, ON L2G 7X5</p>
						</span>
					</div>
					<div class="card-item-4-rating">
						<div class="ratings">
							<div class="rate_message"></div>
							<div class="rating not-rated" data-rate-value="3"></div>
							<div class="rated-info">
								<a href="">Review</a>
							</div>
						</div>
					</div>
					<div class="card-item-5-score">
						<div class="our-score">
							<span>9.8</span>
						</div>
					</div>
					<div class="card-item-6-visit">
						<button>
							<a href="#">Visit Site</a>
						</button>
					</div>
				</div>
				<!-- 4 -->
				<div tab="all,p" class="row active card hotels-stars cards card-item cards-mob" id="card-4">
					<div class="card-item-1-number">
						<span>4</span>
					</div>
					<div class="card-item-2-casino">
						<a href="#">
							<img src="img/casino-logo.svg" alt="Hotel Logo" width="100%" class="casino-logo">
						</a>
					</div>
					<div class="card-item-3-address">
						<span>
							<p>6380 Fallsview BLVD. PO Box 300 Niagara Falls, ON L2G 7X5</p>
						</span>
					</div>
					<div class="card-item-4-rating">
						<div class="ratings">
							<div class="rate_message"></div>
							<div class="rating not-rated" data-rate-value="3"></div>
							<div class="rated-info">
								<a href="">Review</a>
							</div>
						</div>
					</div>
					<div class="card-item-5-score">
						<div class="our-score">
							<span>9.8</span>
						</div>
					</div>
					<div class="card-item-6-visit">
						<button>
							<a href="#">Visit Site</a>
						</button>
					</div>
				</div>
				<!-- 5 -->
				<div tab="all,r" class="row active card hotels-stars cards card-item cards-mob" id="card-4">
					<div class="card-item-1-number">
						<span>5</span>
					</div>
					<div class="card-item-2-casino">
						<a href="#">
							<img src="img/casino-logo.svg" alt="Hotel Logo" width="100%" class="casino-logo">
						</a>
					</div>
					<div class="card-item-3-address">
						<span>
							<p>6380 Fallsview BLVD. PO Box 300 Niagara Falls, ON L2G 7X5</p>
						</span>
					</div>
					<div class="card-item-4-rating">
						<div class="ratings">
							<div class="rate_message"></div>
							<div class="rating not-rated" data-rate-value="3"></div>
							<div class="rated-info">
								<a href="">Review</a>
							</div>
						</div>
					</div>
					<div class="card-item-5-score">
						<div class="our-score">
							<span>9.8</span>
						</div>
					</div>
					<div class="card-item-6-visit">
						<button>
							<a href="#">Visit Site</a>
						</button>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="subscribe-form">
	<div class="subscribe-now">Subscribe Now</div>
	<div class="get-notified">Get notified about our services</div>
	<div class="subscribe-form-separator"></div>
    <form>
        <input type="email" id="subscribe-email" placeholder="example@mail.com" class="wow fadeInLeft" data-wow-delay="0.5s">
        <button id="signup-button">Subscribe</button>
        <label for="subscribe-email" class="subscribe-message error">
            <span class="message-content"></span>
            <span class="message-content-err"></span>
        </label>
    </form>
</section>


<footer class="website-footer">
	<div class="scrolling-footer">
		<div class="container ">
			<div class="footer-text">
				<p>Every lover of gambling dreams of once to break a huge jackpot that will forever change his life
					for the better. Even the most pragmatic and skeptical users deep down hope to win a huge jackpot
					or get into a fantastic white line that will bring huge benefits. <br><br>


					Huge winnings are by no means frequent in gambling, otherwise all operators would have been
					ruined long ago. However, every fan of gambling entertainment has a chance to become a
					millionaire overnight if, of course, he prefers games that allow him to claim huge payments. We
					read articles and news about the most incredible winnings in the history of the gambling
					business, and we dream to be on this list of lucky ones.<br><br>


					Have you ever won big in a casino, in slots, in a lottery, in poker tournaments or sweepstakes?
					Nowadays you can hit the jackpot, even playing on your mobile phone. But remember, the larger
					the jackpot, the more players claim it. Really evaluate your capabilities.Every lover of
					gambling dreams of once to break a huge jackpot that will forever change his life for the
					better. Even the most pragmatic and skeptical users deep down hope to win a huge jackpot or get
					into a fantastic white line that will bring huge benefits.<br><br>


					Huge winnings are by no means frequent in gambling, otherwise all operators would have been
					ruined long ago. However, every fan of gambling entertainment has a chance to become a
					millionaire overnight if, of course, he prefers games that allow him to claim huge payments. We
					read articles and news about the most incredible winnings in the history of the gambling
					business, and we dream to be on this list of lucky ones.<br><br>


					Have you ever won big in a casino, in slots, in a lottery, in poker tournaments or sweepstakes?
					Nowadays you can hit the jackpot, even playing on your mobile phone. But remember, the larger
					the jackpot, the more players claim it. Really evaluate your capabilities.</p>

			</div>
		</div>
	</div>
	<div class="static-footer">
		<div class="container ">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 footer-copyright">
				<span>© 2019 Casino Hotels. All Rights Reserved</span>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 footer-menu-list">
				<ul>
					<li class="mobile-hidden"><a href="about.html">About Us</a></li>
					<li class="mobile-hidden"><a href="contact.html">Contact</a></li>
					<li class="mobile-hidden"><a href="terms.html">Terms of Service</a></li>
					<li class="mobile-hidden"><a href="cookie.html">Cookie</a></li>
					<li class="mobile-hidden"><a href="privacy.html">Privacy</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<?php include "components/javascript.php";?>
<script>
	$(document).ready(function() {
		$("#gamesBl").click();
	});
</script>

</body>
</html>