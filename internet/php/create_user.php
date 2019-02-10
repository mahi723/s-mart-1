<?php

require 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	try {
		$email = $_POST['email'];
		$firstName = $_POST['first_name'];
		$lastName = $_POST['last_name'];
		// $profilePic = $_POST['profile_pic'];
		$password = $_POST['password'];
		$passConfirm = $_POST['pass-confirm'];

			// confirm form fields are not empty
		if (empty($email) || empty($firstName) || empty($lastName) || empty($password) || empty($passConfirm)) {
			throw new \Exception("All fields are required.");
		}
			// confirm passwords match
		if ($password !== $passConfirm) {
			throw new \Exception("Passwords must match.");
		}


			// setup query
		$query = $connection->prepare('SELECT * FROM customers WHERE email = ?');
		$query->bind_param('s', $email);
		$success = $query->execute();

			
		if ($success) {
			$result = $query->get_result();

			// $customerQuery = "SELECT customer_id FROM customers";
			// $customerResult = $connection->query($customerQuery);

				// if match found, throw error
			if ($result->num_rows > 0) {
				throw new \Exception('<p>Email already exists. Try logging in.</p>
					<p><a href="../">Return to Home page</a></p>');
			}

				// create new user if doesn't exist
			$passHash = password_hash($password, PASSWORD_DEFAULT);
			$query = $connection->prepare('INSERT INTO customers (email, first_name, last_name, pass, date_created) VALUES (?, ?, ?, ?, now())');
			$query->bind_param('ssss', $email, $firstName, $lastName, $passHash);
			$success = $query->execute();


			if ($success) {
				header('Location: ../');
			}
			else {
				throw new \Exception($query->error);
			}
		}
		else {
			throw new \Exception($query->error);
		}
	} // end try
	catch (\Throwable $ex) {
		echo $ex->getMessage();
		// header('Location: ../register.php')
	}
}
?>