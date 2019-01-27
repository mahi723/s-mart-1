<?php
	
	$productId = $_GET['product_id'];


	if ($productId) {

		$query = "SELECT * FROM products WHERE product_id = $productId";
		$result = $connection->query($query);


		if ($result) {			

			$product = $result->fetch_object();

			$productId = $product->product_id;
		    $productName = $product->prod_name;
		    $productDesc = $product->prod_desc;
		    $productFeature1 = $product->prod_feature1;
		    $productFeature2 = $product->prod_feature2;
		    $productFeature3 = $product->prod_feature3;
		    $productFeature4 = $product->prod_feature4;
		    $productPrice = $product->prod_price;
		    $productSlogan = $product->product_slogan;
		    $productStock = $product->in_stock;
		    $productQty = $product->quantity;
		    $productImg = $product->product_id;
		}
		else {
			echo mysqli_error($connection);
		}

	}

?>

