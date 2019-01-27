
<?php include 'header.php'; ?>


<main>
	<div class="main-container">
		<section class="welcome">
		<h1>Well, hello Mr. Fancypants!</h1>
		</section>


	<div class="main-content-container">
		<?php include 'announcements.php'; ?>

		<section class="main-content">
			<div>
					<?php if(!$loggedIn): ?>
				<p>Please log into your account to make changes to your profile.</p>
					<?php else : ?>
			<h2>Edit Your Account/Profile:</h2>
			<p>Hello, <?=$_SESSION['name'] ?>. Here are your current account/profile settings. Click your profile picture to change it, or you can update your password below.</p>
				<!-- <p>Please fill out all fields below to create an account.</p> -->
				
				<div class="register-user">
						<!-- display profile pic -->

						<?php if ($profileImgs == null) : ?>
						<img class="accountpg-custpic" src="images/upload_photo.png">
						<?php else : ?>
							<?php $img = $profileImgs->fetch_object();
								if ($img) : ?>
							<img class="accountpg-custpic" src="php/get_profile_pic.php?img_id=<? =$img->image_id ?>" title="<? =$img->filename ?>" />
								<?php endif; ?>
						<?php endif; ?>

						<form action="php/upload_customer_pic.php" method="post" enctype="multipart/form-data" id="profilepic-form" class="inactive">
							<div class="form-field">
								<input type="hidden" id="email" name="email" value="<?=$_SESSION['email'] ?>" />
							</div>
							<div class="form-field">
								<label for="password">Upload your photo:</label>
								<input type="file" id="profile-pic" name="profile_pic" />
							</div>

							<button>Update Profile Image</button>
						</form>

						<div style="clear: both;"></div>

						<form action="php/edit_profile.php" method="post">
							<div class="form-field">
								<input type="hidden" id="email" name="email" value="<?=$_SESSION['email'] ?>" />
							</div>
							<div class="form-field">
								<label for="password">Enter your new password:</label>
								<input type="password" id="password" name="password" />
							</div>
							<div class="form-field">
								<label for="pass-confirm">Re-enter your new password:</label>
								<input type="password" id="pass-confirm" name="pass-confirm" />
							</div>

							<button>Update Profile</button>
						</form>
					<?php endif; ?>

				</div><!-- END USER REGISTRATION -->
			</div>
		</section>
	</div>

	</div>
</main>

<?php include 'footer.php'; ?>