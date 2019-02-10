<?php

	require 'dbconnect.php';


	$imageId = isset($_GET['img_id']) ? $_GET['img_id'] : null;


	if (isset($imageId)) {
		$query = "SELECT * FROM customers c JOIN customer_images custimgs ON custimgs.image_id = c.image_id";
		$result = $connection->query($query);


		if ($result) {
			$customerImg = $result->fetch_object();

			header('Content-type: ' . $customerImg->image_type);
			echo $customerImg->image_data;
		}
		else {
			echo $query->error;
		}
	}

?>