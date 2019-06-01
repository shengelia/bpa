<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Cookie</title>
	<?php include "components/stylesheets.php";?>
</head>

<body>
<?php include "components/header.php";?>

<section class="website-background">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-10 website-background-text">
				<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptatibus hic dignissimos, dolorem recusandae fugiat blanditiis eveniet incidunt, pariatur quibusdam quam facilis, voluptatum, tenetur et quia eos aspernatur non. Sapiente perferendis error.</h1>
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

<?php include "components/current-page.php";?>

<section class="website-cookie">
	<div class="container">
		<div class="website-text-content">
			<h1>Cookie</h1>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae tenetur, pariatur dignissimos assumenda, veritatis quaerat. Quidem, id, iste officia sunt veritatis nam placeat dolor cum mollitia maiores pariatur rerum neque.</p>

			<h2>Header</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum sit cupiditate, eveniet voluptates, id ex veniam odio possimus ipsum perspiciatis quis quia libero. Enim voluptas, ratione deserunt voluptatibus officiis officia.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum sit cupiditate, eveniet voluptates, id ex veniam odio possimus ipsum perspiciatis quis quia libero. Enim voluptas, ratione deserunt voluptatibus officiis officia.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum sit cupiditate, eveniet voluptates, id ex veniam odio possimus ipsum perspiciatis quis quia libero. Enim voluptas, ratione deserunt voluptatibus officiis officia.</p>
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