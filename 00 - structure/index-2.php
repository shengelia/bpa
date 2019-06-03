<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Home</title>
	<?php include "components/stylesheets.php";?>
</head>

<body>
<?php include "components/header.php";?>

<section class="website-background">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-10 website-background-text">
				<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptatibus hic dignissimos, dolorem recusandae fugiat blanditiis eveniet incidunt, pariatur quibusdam quam facilis, voluptatum, tenetur et quia eos aspernatur non. Sapiente perferendis error.</h1>
				<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, rem.</h2>
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
				<div class="table-header-item-4-active-players"><span>Active Players</span></div>
				<div class="table-header-item-5-minimal-deposit"><span>Minimal Deposit</span></div>
				<div class="table-header-item-6-score"><span>Our Score</span></div>
				<div class="table-header-item-7-rating"><span>Rating</span></div>
				<div class="table-header-item-8-visit"><span></span></div>
			</div>
		</div>
	</div>

	<div class="hotels" id="hotels">
		<div class="container">
			<div class="filter-body">
				<div filter="bl, s" class="cards card-item cards-mob" id="card-1">
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
								<a href="review-single.php">Review</a>
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
						<form action="http://mail.ru" target="_blank">
						    <button type="submit">Visit Our Site</button>
						</form>
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
		<?php include "components/static-footer.php";?>
	</div>
</footer>

<?php include "components/javascript.php";?>
</body>
</html>