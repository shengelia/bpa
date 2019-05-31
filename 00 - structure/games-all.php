<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Games</title>
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
				<ul class="nav navbar-nav navbar-right">
					<li><a href="javascript:void(0);">Home</a></li>
					<li class="active"><a href="javascript:void(0);">Games</a></li>
					<li><a href="javascript:void(0);">How we score?</a></li>
					<!-- 
					<li><a href="javascript:void(0);">Blackjack</a></li>
		            <li><a href="javascript:void(0);">Roulett</a></li>
		            <li><a href="javascript:void(0);">Poker</a></li>
		            <li><a href="javascript:void(0);">Baccarat</a></li>
		            <li><a href="javascript:void(0);">Slots</a></li> -->
					<li class="desktop-hidden"><a href="javascript:void(0);">Review</a></li>
		            <li class="desktop-hidden"><a href="javascript:void(0);">Cookies</a></li>
		            <li class="desktop-hidden"><a href="javascript:void(0);">Privacy Policy</a></li>
		            <li class="desktop-hidden"><a href="javascript:void(0);">About Us</a></li>
		            <li class="desktop-hidden"><a href="javascript:void(0);">Terms and Conditions</a></li>
		            <li class="desktop-hidden"><a href="javascript:void(0);">Contact Us</a></li>
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

<section class="games-filter">
	<div class="filter tab">
		<div class="container">
			<div class="row filter-main">
				<div class="col-md-12 col-12 filter-header">
					<ul class="row filter-list filter-header">
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
		<div class="container">
			<div class="row filter-body">
				<div class="game_info">
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

				<div class="col-12 col-md-12 col-xl-12 tab-cards ">
					<!-- 1 -->
					<div tab="all,bl,r,p,ba" class="row active card hotels-stars">
						<div class="number col-md-1 text-center t10-position-mobile">1</div>
						<div class="hotel_logo col-6 col-md-2 t10-hotel-logo-mobile">
							<a href="javascript:;">
								<img src="img/hotels/logo.png" class="Logo w-100 text-center">
							</a>
						</div>
						<div class="address col-6 col-md-3">
							<p>1,avenue du Casino Montreal H3C 4W7</p>
						</div>
						<div class="ratings col-md-2 t10-ratings-mobile">
							<p class="rate_message"></p>
							<div class="rating not-rated" data-rate-value="5"></div>
							<div class="rated2 ">
								<p>Rated:<strong class="rated">346</strong></p>
								<a href="review.html"><u>Review</u></a>
							</div>
						</div>
						<div class="score col-6 col-md-1 text-center">
							<h2>9.8</h2>
							<p>Our score</p>
						</div>
						<div class="visit col-6 col-md-3">
							<a href="javascript:;">GO TO SITE</a>
						</div>
					</div>
					<!-- 2 -->
					<div tab="all,bl,r,p,ba" class="row active card">
						<div class="number col-md-1 text-center t10-position-mobile">2</div>
						<div class="hotel_logo col-6 col-md-2 t10-hotel-logo-mobile">
							<a href="javascript:;">
								<img src="img/hotels/rrc-logo-300-x-200.png" class="RRC-logo-300x200 w-100 text-center">
							</a>
						</div>
						<div class="address col-6 col-md-3">
							<p>8811 River Road Richmond, BC V6X 3P8</p>
						</div>
						<div class="ratings col-md-2 t10-ratings-mobile">
							<p class="rate_message"></p>
							<div class="rating not-rated" data-rate-value="5"></div>
							<div class="rated2 ">
								<p>Rated:<strong class="rated">3256</strong></p>
								<a href="review.html"><u>Review</u></a>
							</div>
						</div>
						<div class="score col-6 col-md-1 text-center">
							<h2> 9.6</h2>
							<p>Our score</p>
						</div>
						<div class="visit col-6 col-md-3">
							<a href="javascript:;">GO TO SITE</a>
						</div>
					</div>
					<!-- 3 -->
					<div tab="all,bl,r,p,ba" class="row active card">
						<div class="number col-md-1 text-center t10-position-mobile">3</div>
						<div class="hotel_logo col-6 col-md-2 t10-hotel-logo-mobile">
							<a href="javascript:;">
								<img src="img/hotels/tri-201310102442653-jpg.png"
								class="tri201310102442653-jpg w-100 text-center">
							</a>
						</div>
						<div class="address col-6 col-md-3">
							<p>2080 United Boulevard Coquitlam, BC V3K 6W3</p>
						</div>
						<div class="ratings col-md-2 t10-ratings-mobile">
							<p class="rate_message"></p>
							<div class="rating not-rated" data-rate-value="5"></div>
							<div class="rated2 ">
								<p>Rated:<strong class="rated">7852</strong></p>
								<a href="review.html"><u>Review</u></a>
							</div>
						</div>
						<div class="score col-6 col-md-1 text-center">
							<h2> 9.3</h2>
							<p>Our score</p>
						</div>
						<div class="visit col-6 col-md-3">
							<a href="javascript:;">GO TO SITE</a>
						</div>
					</div>
					<!-- 4 -->
					<div tab="all,bl,p,ba" class="row active card">
						<div class="number col-md-1 text-center t10-position-mobile">4</div>
						<div class="hotel_logo col-6 col-md-2 t10-hotel-logo-mobile">
							<a href="javascript:;">
								<img src="img/hotels/f-0312-ef-431.png" class="f0312ef431 w-100 text-center">
							</a>
						</div>
						<div class="address col-6 col-md-3">
							<p>Brantford, Ontario, STN Main Newmarket, ON L3Y 0B1 </p>
						</div>
						<div class="ratings col-md-2 t10-ratings-mobile">
							<p class="rate_message"></p>
							<div class="rating not-rated" data-rate-value="5"></div>
							<div class="rated2 ">
								<p>Rated:<strong class="rated">467</strong></p>
								<a href="review.html"><u>Review</u></a>
							</div>
						</div>
						<div class="score col-6 col-md-1 text-center">
							<h2> 8.8</h2>
							<p>Our score</p>
						</div>
						<div class="visit col-6 col-md-3">
							<a href="javascript:;">GO TO SITE</a>
						</div>
					</div>
					<!-- 5 -->
					<div tab="all,bl,r" class="row active card">
						<div class="number col-md-1 text-center t10-position-mobile">5</div>
						<div class="hotel_logo col-6 col-md-2 t10-hotel-logo-mobile">
							<a href="javascript:;">
								<img src="img/hotels/nlc-logo.png" class="NLC_logo  text-center">
							</a>
						</div>
						<div class="address col-6 col-md-3">
							<p>44 Marquis Road Prince Albert SK S6V 7Y5</p>
						</div>
						<div class="ratings col-md-2 t10-ratings-mobile">
							<p class="rate_message"></p>
							<div class="rating not-rated" data-rate-value="5"></div>
							<div class="rated2 ">
								<p>Rated:<strong class="rated">758</strong></p>
								<a href="review.html"><u>Review</u></a>
							</div>
						</div>
						<div class="score col-6 col-md-1 text-center">
							<h2> 8.7</h2>
							<p>Our score</p>
						</div>
						<div class="visit col-6 col-md-3">
							<a href="javascript:;">GO TO SITE</a>
						</div>
					</div>
					<!-- 6 -->
					<div tab="all,bl,p" class="row active card">
						<div class="number col-md-1 text-center t10-position-mobile">6</div>
						<div class="hotel_logo col-6 col-md-2 t10-hotel-logo-mobile">
							<a href="javascript:;">
								<img src="img/hotels/imagesoptimize-php-p-dc-image-df-84-a-75-f-4665-c-6-d-8-edd-28300-a-99-e-9317.png"
								class="imagesoptimizephp_pdcimagedf84a75f4665c6d8edd28300a99e9317 text-center">
							</a>
						</div>
						<div class="address col-6 col-md-3">
							<p>204 Dakota Dunes Way Whitecap, SK S7K 2L2</p>
						</div>
						<div class="ratings col-md-2 t10-ratings-mobile">
							<p class="rate_message"></p>
							<div class="rating not-rated" data-rate-value="5"></div>
							<div class="rated2 ">
								<p>Rated:<strong class="rated">753</strong></p>
								<a href="review.html"><u>Review</u></a>
							</div>
						</div>
						<div class="score col-6 col-md-1 text-center">
							<h2> 8.5</h2>
							<p>Our score</p>
						</div>
						<div class="visit col-6 col-md-3">
							<a href="javascript:;">GO TO SITE</a>
						</div>
					</div>
					<!-- 7 -->
					<div tab="all,p,ba" class="row active card">
						<div class="number col-md-1 text-center t10-position-mobile">7</div>
						<div class="hotel_logo col-6 col-md-2 t10-hotel-logo-mobile">
							<a href="javascript:;">
								<img src="img/hotels/imagesoptimize-php-p-dc-image-05-a-28-b-0265-dcf-2-cf-6518-b-814-d-69869-f-2.png"
								class="imagesoptimizephp_pdcimage05a28b0265dcf2cf6518b814d69869f2 text-center">
							</a>
						</div>
						<div class="address col-6 col-md-3">
							<p>6380 Fallsview Blvd. PO Box 300 Niagara Falls, ON L2G 7X5</p>
						</div>
						<div class="ratings col-md-2 t10-ratings-mobile">
							<p class="rate_message"></p>
							<div class="rating not-rated" data-rate-value="5"></div>
							<div class="rated2 ">
								<p>Rated:<strong class="rated">345</strong></p>
								<a href="review.html"><u>Review</u></a>
							</div>
						</div>
						<div class="score col-6 col-md-1 text-center">
							<h2> 8.3</h2>
							<p>Our score</p>
						</div>
						<div class="visit col-6 col-md-3">
							<a href="javascript:;">GO TO SITE</a>
						</div>
					</div>
					<!-- 8 -->
					<div tab="all,r,p,ba" class="row active card">
						<div class="number col-md-1 text-center t10-position-mobile">8</div>
						<div class="hotel_logo col-6 col-md-2 t10-hotel-logo-mobile">
							<a href="javascript:;">
								<img src="img/hotels/imagesoptimize-php-p-dc-image-59-ed-304-fa-879-f-24982-c-5-ca-75-c-12-ea-35-a.png"
								class="imagesoptimizephp_pdcimage59ed304fa879f24982c5ca75c12ea35a text-center">
							</a>
						</div>
						<div class="address col-6 col-md-3">
							<p>6380 Fallsview Blvd. PO Box 300 Niagara Falls, ON L2G 7X5</p>
						</div>
						<div class="ratings col-md-2 t10-ratings-mobile">
							<p class="rate_message"></p>
							<div class="rating not-rated" data-rate-value="4"></div>
							<div class="rated2 ">
								<p>Rated:<strong class="rated">346</strong></p>
								<a href="review.html"><u>Review</u></a>
							</div>
						</div>
						<div class="score col-6 col-md-1 text-center">
							<h2> 8.2</h2>
							<p>Our score</p>
						</div>
						<div class="visit col-6 col-md-3">
							<a href="javascript:;">GO TO SITE</a>
						</div>
					</div>
					<!-- 9 -->
					<div tab="all,p,ba" class="row active card">
						<div class="number col-md-1 text-center t10-position-mobile">9</div>
						<div class="hotel_logo col-6 col-md-2 t10-hotel-logo-mobile">
							<a href="javascript:;">
								<img src="img/hotels/imagesoptimize-php-p-dc-image-5959-ef-7836-a-73-fa-8-c-3-be-7-ead-3372-a-263.png"
								class="text-center imagesoptimizephp_pdcimage5959ef7836a73fa8c3be7ead3372a263">
							</a>
						</div>
						<div class="address col-6 col-md-3">
							<p>5705 Falls Ave. Niagara Falls, ON L2E 6T3 Canada</p>
						</div>
						<div class="ratings col-md-2 t10-ratings-mobile">
							<p class="rate_message"></p>
							<div class="rating not-rated" data-rate-value="4"></div>
							<div class="rated2 ">
								<p>Rated:<strong class="rated">346</strong></p>
								<a href="review.html"><u>Review</u></a>
							</div>
						</div>
						<div class="score col-6 col-md-1 text-center">
							<h2> 8.1</h2>
							<p>Our score</p>
						</div>
						<div class="visit col-6 col-md-3">
							<a href="javascript:;">GO TO SITE</a>
						</div>
					</div>
					<!-- 10 -->
					<div tab="all,p,s" class="row active card">
						<div class="number col-md-1 text-center t10-position-mobile">10</div>
						<div class="hotel_logo col-6 col-md-2 t10-hotel-logo-mobile">
							<a href="javascript:;">
								<img src="img/hotels/imagesoptimize-php-p-dc-image-6-c-336-a-9050501-ae-46467-b-88889-e-4286-f.png"
								class="text-center imagesoptimizephp_pdcimage6c336a9050501ae46467b88889e4286f">
							</a>
						</div>
						<div class="address col-6 col-md-3">
							<p>1, avenue du
							Casino Montreal H3C 4W7</p>
						</div>
						<div class="ratings col-md-2 t10-ratings-mobile">
							<p class="rate_message"></p>
							<div class="rating not-rated" data-rate-value="4"></div>
							<div class="rated2 ">
								<p>Rated:<strong class="rated">346</strong></p>
								<a href="review.html"><u>Review</u></a>
							</div>
						</div>
						<div class="score col-6 col-md-1 text-center">
							<h2> 8.0</h2>
							<p>Our score</p>
						</div>
						<div class="visit col-6 col-md-3">
							<a href="javascript:;">GO TO SITE</a>
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
</body>
</html>