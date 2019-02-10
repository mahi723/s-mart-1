<?php

	require ('dbconnect.php');


	if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		try {
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirmPass = $_POST['pass-confirm'];
			$passHash = password_hash($password, PASSWORD_DEFAULT);

				// check for entered passwords
			if (empty($password) || empty($confirmPass)) {
				throw new \Exception('<p>Please fill in both password fields.</p>
					<p><a href="../account.php">Return to change your password</a></p>');
			}
			else if ($password != $confirmPass) {
				throw new \Exception('<p>Passwords must match.</p>
					<p><a href="./account.php">Return to change your password</a></p>');
			}
			else {
					// find customer info query
				$query = $connection->prepare('SELECT customer_id FROM customers WHERE email = ?');
				$query->bind_param('s', $email);
				$success = $query->execute();

				if ($success) {

						// customer found
					$result = $query->get_result();

						// update customer record query
					if ($result->num_rows == 1) {
						$query = $connection->prepare("UPDATE customers SET pass = ? WHERE email = ?");
						$query->bind_param('ss', $passHash, $email);
						$success = $query->execute();

							// customer updated or error thrown
						if ($success){
							header('Location: ../');
						}
						else {
							throw new \Exception('<p>Sorry, something went wrong</p>
								<p><a href="../account.php">Return to your account page</a></p>');
						}
					} // end customer update

				} // end customer found

			}

		} // end try
		catch (\Throwable $ex){
			echo $ex->getMessage();
		} // end catch
		
	} // end server POST check

?>