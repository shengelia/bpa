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
				<h1>Top 10 Casino Hotels of Europe. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h1>
				<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, rem.</h2>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-2 website-background-trusted-and-date">
				<!-- <div class="trusted">
					<img src="img/trusted.png" alt="Trusted Choise" width="100%">
				</div> -->
				<div class="date">
					<span id="current_date"></span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="filter" id="filter">
    <div class="container no-lr-padding">
        <div class="row">
            <div class="col-md-12 xs-nopadding">
                <div class="filter-main">
                    <ul class="filter-list filter-header filter-header-re">
                        <li><a href="#">FILTER BY:</a></li>
                        <li filter="all" class="filter_active"><a href="#">View all</a></li>
                        <li filter="bl"><a href="#">Blackjack</a></li>
                        <li filter="r"><a href="#">Roulette</a></li>
                        <li filter="p"><a href="#">Poker</a></li>
                        <li filter="ba"><a href="#">Baccarat</a></li>
                        <li filter="s"><a href="#">Slot</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="hotels" id="hotels">
    <div class="container">
        
        <div class="table-header">
			<div class="container ">
				<div class="table-header-items">
					<div class="interior-table-header-item-1-number"><span></span></div>
					<div class="interior-table-header-item-2-casino-logo"><span>Casino</span></div>
					<div class="interior-table-header-item-3-address"><span>Adress</span></div>
					<div class="interior-table-header-item-4-score"><span>Our Score</span></div>
					<div class="interior-table-header-item-5-rating"><span>Rating</span></div>
					<div class="interior-table-header-item-6-visit"><span>Visit Our Website</span></div>
				</div>
			</div>
		</div>


        <div class="row filter-body">
            <div filter="bl, ba, s" class="cards cards-re card-item cards-mob" id="card-1">
                <div class="interior-card-item-1-number">
					<span>1</span>
				</div>
				<div class="interior-card-item-2-casino-logo">
					<div class="editors-choice">
						<img src="img/editors.png" alt="Editors Choice" width="100%" height="100%">
					</div>
					<a href="http://www.mail.ru" target="_blank">
						<img src="img/casino-logo.png" alt="Hotel Logo" width="100%" class="casino-logo">
					</a>
				</div>
				<div class="interior-card-item-3-address">
					<span>
						<h1>Delectus ea quibusdam incidunt, debitis!</h1>
					</span>
				</div>
				<div class="interior-card-item-4-score">
					<div class="our-score">
						<span>9.8</span>
						<p>Our score</p>
					</div>
				</div>					
				<div class="interior-card-item-5-rating">
					<div class="ratings">
						<div class="rate_message"></div>
						<div class="rating not-rated" data-rate-value="3"></div>
						<div class="rated-info">
							<a href="review-single.php">Review</a>
						</div>
					</div>
				</div>					
				<div class="interior-card-item-6-visit">
					<span>
						<form action="http://www.mail.ru" target="_blank">
						    <button type="submit"><img src="img/button_visit_arrow.png" alt="Visit"><p>Visit Our Site</p></button>
						</form>
					</span>						
				</div>

                <div class="review">
                    <div class="review-scrool">
                        <p>The rules are simple, the play is thrilling, and there is opportunity for high strategy. In fact, for the expert player who mathematically plays a perfect game and is able to count cards, the odds are sometimes in that player's favor to win ... 
                        <a href="review-single.php" target="_blank">Read More</a>
                    	</p>
                    </div>
                </div>
            </div>

            <div filter="bl" class="cards cards-re card-item cards-mob" id="card-2">
                <div class="interior-card-item-1-number">
					<span>2</span>
				</div>
				<div class="interior-card-item-2-casino-logo">
					<div class="editors-choice">
						<img src="img/editors.png" alt="Editors Choice" width="100%" height="100%">
					</div>
					<a href="http://www.mail.ru" target="_blank">
						<img src="img/casino-logo.png" alt="Hotel Logo" width="100%" class="casino-logo">
					</a>
				</div>
				<div class="interior-card-item-3-address">
					<span>
						<h1>Delectus ea quibusdam incidunt, debitis!</h1>
					</span>
				</div>
				<div class="interior-card-item-4-score">
					<div class="our-score">
						<span>9.8</span>
						<p>Our score</p>
					</div>
				</div>					
				<div class="interior-card-item-5-rating">
					<div class="ratings">
						<div class="rate_message"></div>
						<div class="rating not-rated" data-rate-value="3"></div>
						<div class="rated-info">
							<a href="review-single.php">Review</a>
						</div>
					</div>
				</div>					
				<div class="interior-card-item-6-visit">
					<span>
						<form action="http://www.mail.ru" target="_blank">
						    <button type="submit"><img src="img/button_visit_arrow.png" alt="Visit"><p>Visit Our Site</p></button>
						</form>
					</span>						
				</div>

                <div class="review">
                    <div class="review-scrool">
                        <p>The rules are simple, the play is thrilling, and there is opportunity for high strategy. In fact, for the expert player who mathematically plays a perfect game and is able to count cards, the odds are sometimes in that player's favor to win ... 
                        <a href="review-single.php" target="_blank">Read More</a>
                    	</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "components/static-footer.php";?>

<?php include "components/javascript.php";?>
</body>
</html>