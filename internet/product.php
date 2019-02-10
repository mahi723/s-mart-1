
<?php
	include 'header.php';
	include 'php/display_products.php';
?>


<main>
	<div class="main-container">
		<section class="welcome">
		<h1><?= $productSlogan ?></h1>
		</section>


	<div class="main-content-container">
		<?php include 'announcements.php'; ?>

		<section class="main-content">
			<div>
				<h2><?= $productName ?></h2>
				<!-- <p>Please fill out all fields below to create an account.</p> -->
				
				<div class="prodpg-container">
							<!-- display product pic -->
						<img class="prodpg-pic" src="images/products/<?= $productImg ?>.jpg" title="<?= $productName ?>" />

					<div class="prodpg-details">
						<p class="prodpg-features">
							<ul>
								<li><?= $productFeature1 ?></li>
								<li><?= $productFeature2 ?></li>
								<li><?= $productFeature3 ?></li>
								<li><?= $productFeature4 ?></li>
							</ul>
						</p>

						<div class="prodpg-price-wrapper">
							<p>Price: <?= $productPrice ?></p>
							<p>In Stock: <?= $productStock ?></p>
						</div>

						<div class="prodpg-cart-wrapper">
							<form method="post" action="php/add_to_cart.php">
								<div class="cart-field form-qty">
									<label for="quantity" class="qty-label">Quantity:&nbsp;</label>
									<input type="text" id="quantity" name="qty" value="1" />
								</div>
								<button class="prodpg-add">Add to Cart</button>
							</form>
						</div>

						<p class="prodpg-desc"><?= $productDesc ?></p>
					</div>

				</div><!-- END PROD CONTAINER -->
			</div>
		</section>
	</div>

	</div>
</main>

<?php include 'footer.php'; ?>