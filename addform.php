<?php
require "connection.php";
if(isset($_POST['add_items'])){
	$productName = $_POST['productName'];
	$productPrice = $_POST['productPrice'];
	$productDesc = mysqli_real_escape_string($conn, $_POST['productDesc']);
	$category_id = $_POST['category_id'];
	$productQty = $_POST['productQty'];
	$sql = "INSERT INTO products (productName, category_id, productPrice, productDesc, productQty) VALUES ('$productName', $category_id, $productPrice, '$productDesc', $productQty)";
	echo $sql;
	mysqli_query($conn,$sql) or die('<br>' . 'Product update failed. Please contact admin.');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Products</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/forms.css">
</head>
<body>
	
	<div class="container-fluid">
		<form class="form-horizontal" method="POST">
			
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="category_id">
					Product Category:
				</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="category_id" name="category_id" placeholder="Enter new product category number">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="productName">Product Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="productName" name="productName" placeholder="Enter new product name">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="productDesc">Description:</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="productDesc" name="productDesc" placeholder="Enter new product description">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="productPrice">Price:</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="productPrice" name="productPrice" placeholder="Enter new product price">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="productQty">Quantity Available:</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="productQty" name="productQty" placeholder="Enter new product price">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="add_items" id="add_items" class="btn btn-success">Add Product</button>
				</div>
			</div>
		</form>	
				<div class="col-sm-offset-2 col-sm-10">
					<a href="product1.php"><button class="btn btn-default">Back to Products</button></a>
					
				</div>
	</div>

</body>
</html>