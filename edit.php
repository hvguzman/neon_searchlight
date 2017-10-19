<?php 
session_start();
$string = file_get_contents("items.json");
$items = json_decode($string, true);

// this takes all the id's (id, productcat, productname, description, price)
// makes it into an associative array
// and allows it to become a global $id

if(isset($_POST['edit'])){
	//this gets the id of each element in the form
	// in this case (productcat, productname, description, price)
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
			//example: if "foodadditives"['id'] == "foodadditives"
			$items[$key]["productcat"] = $_POST['productname'];
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


$id = $_GET['id'];
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