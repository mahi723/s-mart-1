
<?php
	include 'header.php'; 
?>


<main>
	<div class="main-container">
		<section class="welcome">
		<h1>Alright you primitive screwheads, listen up!</h1>
		<h2>Welcome to S-Mart</h2>
		<p>We are your number one shop for all of your Evil Dead needs for fighting against the Army of Darkness. We encourage you to highly consider our best sellers below to aid you in your battles, but please browse the site for an array of items to assist you against your foes. Shop smart. Shop S-Mart! You got that?!</p>
		</section>


	<div class="main-content-container">
		<?php include 'announcements.php'; ?>

		<section class="main-content">
			<div>
				<h2>S-Mart Best Sellers:</h2>
				<p>Ready to battle Deadites? Well, here are some of our best selling weapons and equipment to help you defeat your Evil Dead enemies and the Army of Darkness.</p>
				
				<div class="homepg-deals">				
					<div class="homepg-product">
						<div class="category-prodImg">
							<img class="respsonsive js-prodPeek" src="images/products/precise_aim.jpg" />
						</div>
						<h3 class="product-title js-prodPeek">Boomstick</h3>
						<div class="product-summary inactive">
							<div class="product-details">
								<ul>
									<li>Twelve-gauge</li>
									<li>Double-barreled</li>
									<li>Walnut stock</li>
									<li>Made of cobalt blue steel</li>
									<li>Hair trigger</li>
								</ul>
								<a href="product.php?product_id=1">View Product</a>
							</div>
						</div>
					</div><!-- END HOMEPG PRODUCT -->

					<div class="homepg-product">
						<div class="category-prodImg">
							<img class="respsonsive js-prodPeek" src="images/products/light_weight.jpg" />
						</div>
						<h3 class="product-title js-prodPeek">Homelite XL Chainsaw</h3>
						<div class="product-summary inactive">
							<div class="product-details">
								<ul>
									<li>Red exterior</li>
									<li>Cuts through bone like butter - great for dismembering Deadites</li>
									<li>Little to no gas consumption</li>
									<li></li>
								</ul>
								<a href="product.php?product_id=2">View Product</a>
							</div>
						</div>
					</div><!-- END HOMEPG PRODUCT -->

					<div class="homepg-product">
						<div class="category-prodImg">
							<img class="respsonsive js-prodPeek" src="images/products/grabbing_ability.jpg" />
						</div>
						<h3 class="product-title js-prodPeek">Metal Gauntlet</h3>
						<div class="product-summary inactive">
							<div class="product-details">
								<ul>
									<li>Right hand replacement</li>
									<li>Sophisticated design using Medieval armor and Oldsmobile parts</li>
									<li>Very powerful grip</li>
									<li>All around "Groovy!"</li>
								</ul>
								<a href="product.php?product_id=3">View Product</a>
							</div>
						</div>
					</div><!-- END HOMEPG PRODUCT -->

				</div><!-- END HOMEPAGE DEALS ROW -->
			</div>
		</section>
	</div>

	</div>
</main>

<?php include 'footer.php'; ?>