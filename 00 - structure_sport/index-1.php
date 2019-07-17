<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Sport Bars</title>
	<?php include "components/stylesheets.php";?>
</head>
<body>
<?php include "components/header.php";?>

<?php include "components/slider.php";?>

<section class="filter-index">
	<div class="filter" id="filter">
		<div class="container">
			<div class="filter-main">
				<ul class="filter-list filter-header">
					<?php include "components/filter-li.php";?>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="table-header">
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

	<div class="hotels" id="hotels">
		<div class="container">
			<div class="filter-body">
				<!-- 1 -->
				<?php include "components/index-card-interior-1.php";?>


				<!-- 2 -->
				<?php include "components/index-card-interior-x.php";?>


				<!-- 3 -->
				<?php include "components/index-card-interior-x.php";?>


				<!-- 4 -->
				<?php include "components/index-card-interior-x.php";?>


				<!-- 5 -->
				<?php include "components/index-card-interior-x.php";?>


				<!-- 6 -->
				<?php include "components/index-card-interior-x.php";?>


				<!-- 7 -->
				<?php include "components/index-card-interior-x.php";?>


				<!-- 8 -->
				<?php include "components/index-card-interior-x.php";?>


				<!-- 9 -->
				<?php include "components/index-card-interior-x.php";?>


				<!-- 10 -->
				<?php include "components/index-card-interior-x.php";?>
			</div>
		</div>
	</div>
</section>

<?php include "components/footer-text.php";?>
<?php include "components/footer-menu.php";?>
<?php include "components/javascript.php";?>
</body>
</html>