<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Horse Racing</title>
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
						<?php include "components/filter-li-games.php";?>
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
					<p tab="hors" class="game-text rm-link " id="info_poker">
						Horse Racing! One of the most thrilling games in gambling industry. In fact, a mature player knows how to count the cards, is more likely to win the game. But not everyone is an expert. So here we wrote a brief rule of this game.
						<span id="dots2">...</span>
						<span id="more2">
						Each participant tries to beat the dealer, gaining as close as possible to 21, without passing it. Before starting the deal, each player bets in the form of chips in front of him in the designated area. Minimum and maximum limits are set on bets. When all players have placed their bets, the dealer gives one card face up to each player clockwise, and then one card face up to him.
						</span>
						<button onclick="myFunction2()" id="myBtn2">Read more</button>
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
					<?php include "components/games-card-interior-1.php";?>


					<!-- 2 -->
					<?php include "components/games-card-interior-x.php";?>


					<!-- 3 -->
					<?php include "components/games-card-interior-x.php";?>


					<!-- 4 -->
					<?php include "components/games-card-interior-x.php";?>


					<!-- 5 -->
					<?php include "components/games-card-interior-x.php";?>


					<!-- 6 -->
					<?php include "components/games-card-interior-x.php";?>


					<!-- 7 -->
					<?php include "components/games-card-interior-x.php";?>


					<!-- 8 -->
					<?php include "components/games-card-interior-x.php";?>


					<!-- 9 -->
					<?php include "components/games-card-interior-x.php";?>


					<!-- 10 -->
					<?php include "components/games-card-interior-x.php";?>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include "components/footer-text.php";?>
<?php include "components/footer-menu.php";?>
<?php include "components/javascript.php";?>
<script>
	$( document ).ready(function() {
	    $("#Horse_Racing").click();
	});
</script>
</body>
</html>