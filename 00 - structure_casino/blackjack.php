<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Blackjack</title>
	<?php include "components/stylesheets.php";?>
</head>

<body>
<?php include "components/header.php";?>

<?php include "components/slider.php";?>

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
							<a href="javascript:void(0)">Blackjack</a>
						</li>
						<li tab="r" id="gamesR" class="col-25 col-50 filter-item">
							<a href="javascript:void(0)">Roulette</a>
						</li>
						<li tab="p" id="gamesP" class="col-25 col-50 filter-item">
							<a href="javascript:void(0)">Poker</a>
						</li>
						<li tab="ba" id="gamesB" class="col-25 col-50 filter-item">
							<a href="javascript:void(0)">Baccarat</a>
						</li>
						<li tab="s" id="gamesS" class="col-25 col-50 filter-item">
							<a href="javascript:void(0)">Slot</a>
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
				</div>
				</div>
			</div>

			<div class="table-header">
				<div class="container ">
					<div class="table-header-items">
						<div class="interior-table-header-item-1-number"><span>#</span></div>
						<div class="interior-table-header-item-2-casino-logo"><span>Casino</span></div>
						<div class="interior-table-header-item-3-address"><span>Adress</span></div>
						<div class="interior-table-header-item-4-rating"><span>Rating</span></div>
						<div class="interior-table-header-item-5-score"><span>Our Score</span></div>
						<div class="interior-table-header-item-6-visit"><span>Visit Our Website</span></div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-12 col-xl-12 tab-cards tab-cards-games no-lr-padding">
				<div class="container">
					<!-- 1 -->
					<div tab="bl" class="row active card hotels-stars cards card-item cards-mob" id="card-1">
						<div class="interior-card-item-1-number">
							<div class="editors-choice">
								<img src="img/editors.png" alt="Editors Choice" width="100%" height="100%">
							</div>
							<span>1</span>
						</div>
						<div class="interior-card-item-2-casino-logo">
							<a href="http://www.mail.ru" target="_blank">
								<img src="img/casino-logo.png" alt="Hotel Logo" width="100%" class="casino-logo">
							</a>
						</div>
						<div class="interior-card-item-3-address">
							<span>
								<h1>Delectus ea quibusdam incidunt, debitis!</h1>
							</span>
						</div>
						<div class="interior-card-item-4-rating">
							<div class="ratings">
								<div class="rate_message"></div>
								<div class="rating not-rated" data-rate-value="3"></div>
								<div class="rated-info">
									<a href="review-single.php">Review</a>
								</div>
							</div>
						</div>
						<div class="interior-card-item-5-score">
							<div class="our-score">
								<span>9.8</span>
								<p>Our score</p>
							</div>
						</div>										
						<div class="interior-card-item-6-visit">
							<span>
								<form action="http://www.mail.ru" target="_blank">
								    <button type="submit"><p>Visit Our Site</p></button>
								</form>
							</span>						
						</div>
					</div>
					<!-- 2 -->
					<div tab="bl, r" class="row active card hotels-stars cards card-item cards-mob" id="card-2">
						<div class="interior-card-item-1-number">
							<span>2</span>
						</div>
						<div class="interior-card-item-2-casino-logo">
							<a href="http://www.mail.ru" target="_blank">
								<img src="img/casino-logo.png" alt="Hotel Logo" width="100%" class="casino-logo">
							</a>
						</div>
						<div class="interior-card-item-3-address">
							<span>
								<h1>Delectus ea quibusdam incidunt, debitis!</h1>
							</span>
						</div>
						<div class="interior-card-item-4-rating">
							<div class="ratings">
								<div class="rate_message"></div>
								<div class="rating not-rated" data-rate-value="3"></div>
								<div class="rated-info">
									<a href="review-single.php">Review</a>
								</div>
							</div>
						</div>
						<div class="interior-card-item-5-score">
							<div class="our-score">
								<span>9.8</span>
								<p>Our score</p>
							</div>
						</div>										
						<div class="interior-card-item-6-visit">
							<span>
								<form action="http://www.mail.ru" target="_blank">
								    <button type="submit"><p>Visit Our Site</p></button>
								</form>
							</span>						
						</div>
					</div>
					<!-- 3 -->
					<div tab="p" class="row active card hotels-stars cards card-item cards-mob" id="card-3">
						<div class="interior-card-item-1-number">
							<span>3</span>
						</div>
						<div class="interior-card-item-2-casino-logo">
							<a href="http://www.mail.ru" target="_blank">
								<img src="img/casino-logo.png" alt="Hotel Logo" width="100%" class="casino-logo">
							</a>
						</div>
						<div class="interior-card-item-3-address">
							<span>
								<h1>Delectus ea quibusdam incidunt, debitis!</h1>
							</span>
						</div>
						<div class="interior-card-item-4-rating">
							<div class="ratings">
								<div class="rate_message"></div>
								<div class="rating not-rated" data-rate-value="3"></div>
								<div class="rated-info">
									<a href="review-single.php">Review</a>
								</div>
							</div>
						</div>
						<div class="interior-card-item-5-score">
							<div class="our-score">
								<span>9.8</span>
								<p>Our score</p>
							</div>
						</div>										
						<div class="interior-card-item-6-visit">
							<span>
								<form action="http://www.mail.ru" target="_blank">
								    <button type="submit"><p>Visit Our Site</p></button>
								</form>
							</span>						
						</div>
					</div>
					<!-- 4 -->
					<div tab="ba" class="row active card hotels-stars cards card-item cards-mob" id="card-4">
						<div class="interior-card-item-1-number">
							<span>4</span>
						</div>
						<div class="interior-card-item-2-casino-logo">
							<a href="http://www.mail.ru" target="_blank">
								<img src="img/casino-logo.png" alt="Hotel Logo" width="100%" class="casino-logo">
							</a>
						</div>
						<div class="interior-card-item-3-address">
							<span>
								<h1>Delectus ea quibusdam incidunt, debitis!</h1>
							</span>
						</div>
						<div class="interior-card-item-4-rating">
							<div class="ratings">
								<div class="rate_message"></div>
								<div class="rating not-rated" data-rate-value="3"></div>
								<div class="rated-info">
									<a href="review-single.php">Review</a>
								</div>
							</div>
						</div>
						<div class="interior-card-item-5-score">
							<div class="our-score">
								<span>9.8</span>
								<p>Our score</p>
							</div>
						</div>										
						<div class="interior-card-item-6-visit">
							<span>
								<form action="http://www.mail.ru" target="_blank">
								    <button type="submit"><p>Visit Our Site</p></button>
								</form>
							</span>						
						</div>
					</div>
					<!-- 5 -->
					<div tab="s" class="row active card hotels-stars cards card-item cards-mob" id="card-4">
						<div class="interior-card-item-1-number">
							<span>5</span>
						</div>
						<div class="interior-card-item-2-casino-logo">
							<a href="http://www.mail.ru" target="_blank">
								<img src="img/casino-logo.png" alt="Hotel Logo" width="100%" class="casino-logo">
							</a>
						</div>
						<div class="interior-card-item-3-address">
							<span>
								<h1>Delectus ea quibusdam incidunt, debitis!</h1>
							</span>
						</div>
						<div class="interior-card-item-4-rating">
							<div class="ratings">
								<div class="rate_message"></div>
								<div class="rating not-rated" data-rate-value="3"></div>
								<div class="rated-info">
									<a href="review-single.php">Review</a>
								</div>
							</div>
						</div>
						<div class="interior-card-item-5-score">
							<div class="our-score">
								<span>9.8</span>
								<p>Our score</p>
							</div>
						</div>										
						<div class="interior-card-item-6-visit">
							<span>
								<form action="http://www.mail.ru" target="_blank">
								    <button type="submit"><p>Visit Our Site</p></button>
								</form>
							</span>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include "components/static-footer.php";?>

<?php include "components/javascript.php";?>
<script>
	$( document ).ready(function() {
	    $("#gamesBl").click();
	});
</script>
</body>
</html>