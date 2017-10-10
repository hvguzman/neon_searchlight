<?php
session_start();
require "connection.php";
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";
// this takes all the id's (id, productName, productPrice, productDesc)
// makes it into an associative array
// and allows it to become a global $id
if(isset($_POST['edit'])){
	//this gets the id of each element in the form
	$id = $_GET['id'];
	// $items is now a PHP variable, which was converted from the json string
	// since we write it as true
	// like so: json_decode($variable, true)
	// we get an associative array
	foreach ($items as $key => $item){
		// for each associative array in $items
		// like so: "productcat": "Food Additives"
		// or: "price": "500"
		// it assigns the current element's key to the $key value on each iteration
		// so in this case: "productcat": "Food Additives"
		// $key = "productcat"
		// $item = "Food Additives"
		// and so on, for the rest of the array
		if($item['id']==$id) {
			//example: if "1"['id'] == "1"
			$items[$key]["productcat"] = $_POST['productcat'];
			$items[$key]["productname"] = $_POST['productname'];
			$items[$key]["description"] = $_POST['description'];
			$items[$key]["price"] = $_POST['price'];
		}

	}
	$items_json_string = json_encode($items, JSON_PRETTY_PRINT);
	$file = fopen("items.json","w");
	fwrite($file, $items_json_string);
	fclose($file);
}


$id = $_GET["id"];
foreach($items as $item){
	// example: for each "id" as "1"
	// $item = "1"
	// example: for each "productcat" as "Food Additives"
	// $item = "Food Additives"
	// for each "price" as "500"
	// $item = "500"
	// and so on
	if($item['id']==$id){
		// example: if "Food Additives"['id'] = "productcat"
 		$chosen_item = $item;
		// $chosen_item = "Food Additives"
 	}
}





 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Products</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
</head>
<body>
	
	<div class="container-fluid">
		<form class="form-horizontal" method="POST">
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="id">
					Product ID #:
				</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="id" name="id" placeholder="Type the ID# of the product you wish to edit" value="<?php echo $chosen_item['id']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="productcat">
					Product Category:
				</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="productcat" name="productcat" placeholder="Enter new product category" value="<?php echo $chosen_item['productcat']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="productname">Product Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="productname" name="productname" placeholder="Enter new product name" value="<?php echo $chosen_item['productname']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="description">Product Description:</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="description" name="description" placeholder="Enter new product description" value="<?php echo $chosen_item['description']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="price">Price:</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="price" name="price" placeholder="Enter new product price" value="<?php echo $chosen_item['price']; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="edit" class="btn btn-success">Commit Changes</button>
				</div>
			</div>
		</form>	
				<div class="col-sm-offset-2 col-sm-10">
					<a href="product1.php"><button class="btn btn-default">Back to Products</button></a>
					
				</div>
	</div>

</body>
</html>