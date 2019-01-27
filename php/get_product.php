<?php
	
	require 'dbconnect.php';


	function productsNavLinks($connection) {

		$query = "SELECT * FROM products";
		$result = $connection->query($query);

		if ($result) {

			while ($row = $result->fetch_object()) {
				echo "<ul>
						<li><a href=\"product.php?product_id=$row->product_id\">$row->prod_name</a></li>
					</ul>";
			}
		}
		else {
			echo mysqli_error($connection);
		}
	} // end product nav links





	function bestSeller1($connection) {

		$query = "SELECT * FROM products WHERE prod_name = $";
		$result = $connection->query($query);

		if ($result) {

			while ($row = $result->fetch_object()) {
				echo "<ul>
						<li><a href=\"product.php?product_id=$row->product_id\">View Product</a></li>
					</ul>";
			}
		}
		else {
			echo mysqli_error($connection);
		}
	} // end product nav links

?>

