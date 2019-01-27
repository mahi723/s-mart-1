<?php

	require 'dbconnect.php';


	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		uploadCustomerPic($connection);
	}


	function uploadCustomerPic($connection) {
		if (!isset($_FILES['profile_pic'])) {
			return;
		}
		else {
			$upload = $_FILES['profile_pic'];
			$tempName = $upload['tmp_name'];
			$fileName = $upload['name'];
			$fileType = $upload['type'];
			$fileSize = $upload['size'];



			// setup select query and validate if dog exists
			$query = $connection->prepare('SELECT * FROM customer_images');
			// $query->bind_param('s', $email);
			$success = $query->execute();

			if ($success) {
				$result = $query->get_result();
				// $customerImage = $result->fetch_object();

				if (file_exists($tempName)) {
					$stream = fopen($tempName, 'r');
					$imgData = fread($stream, $fileSize);
					fclose($stream);

					// if ($result->num_rows > 0) {
					// 	echo ""
					// }

						$query = $connection->prepare('INSERT INTO customer_images (filename, image_type, image_data) VALUES (?, ?, ?)');
						$query->bind_param('sss', $fileName, $fileType, $imgData);
						$success = $query->execute();

						if ($success) {
							$customerImg = $query->insert_id;

							$custImgQuery = $connection->prepare('UPDATE customers SET image_id = ?');
							$custImgQuery->bind_param('i', $customerImg);
							$custImgQuery->execute();

							echo $customerImg;
							header('Location: ../account.php');
						}
						else {
							echo $success->error;
						} // end image add

				} // check for file existence
			} // end email in images table check
		} // end check for image POST
	} // end upload function

?>