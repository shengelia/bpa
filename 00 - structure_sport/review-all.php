<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Reviews</title>
	<?php include "components/stylesheets.php";?>
</head>

<body>
<?php include "components/header.php";?>

<?php include "components/slider.php";?>

<section class="filter filter-re" id="filter">
    <div class="container">
        <div class="row">
            <div class="filter-main">
                <ul class="filter-list filter-header">
                    <?php include "components/filter-li.php";?>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="hotels" id="hotels">       
        <div class="table-header table-header-review">
			<div class="container">
				<div class="table-header-items">
					<div class="interior-table-header-item-1-number"><span><img src="img/number.png" alt="Number" width="100%"></span></div>
					<div class="interior-table-header-item-2-casino-logo"><span>Casino</span></div>
					<div class="interior-table-header-item-3-address"><span>Adress</span></div>
					<div class="interior-table-header-item-4-rating"><span>Rating</span></div>
					<div class="interior-table-header-item-5-score"><span>Our Score</span></div>
					<div class="interior-table-header-item-6-visit"><span>Visit Our Website</span></div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row filter-body">
	            <div filter="cric, afl, golf" class="cards cards-re card-item cards-mob" id="card-1">
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

	                <div class="review">
	                    <div class="review-scrool">
	                        <p>The rules are simple, the play is thrilling, and there is opportunity for high strategy. In fact, for the expert player who mathematically plays a perfect game and is able to count cards, the odds are sometimes in that player's favor to win ... 
	                        <a href="review-single.php" target="_blank">Read More</a>
	                    	</p>
	                    </div>
	                </div>
	            </div>

	            <div filter="hors, golf, socc" class="cards cards-re card-item cards-mob" id="card-2">
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

<?php include "components/footer-text.php";?>
<?php include "components/footer-menu.php";?>
<?php include "components/javascript.php";?>
</body>
</html>