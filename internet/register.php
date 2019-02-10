
<?php include 'header.php'; ?>


<main>
	<div class="main-container">
		<section class="welcome">
		<h1>You Sir, are not one of my vassals..</h1>
		</section>


	<div class="main-content-container">
		<?php include 'announcements.php'; ?>

		<section class="main-content">
			<div>
				<h2>Create New Account:</h2>
				<p>Please fill out all fields below to create an account.</p>
				<h3>Why Create An Account?</h3>
				<p>To be able to place orders, an account must be created. This is how we ensure quality customer service and proper handling of your order and customer data. Without an account, you will not be able to checkout. We understand that checking out as a "guest" can be more convenient at times, but we strive for customer satisfaction. So, the account form is very small to keep account creation time to a minimum and, again, this helps us ensure we provide the best customer care possible.</p>
				<p>Thank you!</p>
				
				<div class="register-user">
					<form action="php/create_user.php" method="post" enctype="multipart/form-data">
						<div class="form-field">
							<label for="email">Enter your email address:</label>
							<input type="text" id="email" name="email" />
						</div>
						<div class="form-field">
							<label for="firstname">Enter your first name:</label>
							<input type="text" id="firstname" name="first_name" />
						</div>
						<div class="form-field">
							<label for="lastname">Enter your last name:</label>
							<input type="text" id="lastname" name="last_name" />
						</div>
						<div class="form-field">
							<label for="password">Enter a password:</label>
							<input type="password" id="password" name="password" />
						</div>
						<div class="form-field">
							<label for="pass-confirm">Re-enter the password:</label>
							<input type="password" id="pass-confirm" name="pass-confirm" />
						</div>

						<button>Create Account</button>
					</form>
				</div><!-- END USER REGISTRATION -->
			</div>
		</section>
	</div>

	</div>
</main>

<?php include 'footer.php'; ?>