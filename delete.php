<?php 

require "connection.php";

$id = $_GET['id'];

$sql = "DELETE FROM items WHERE id = $id";
mysqli_query($conn,$sql) or die();

// $string = file_get_contents("items.json");
// $items = json_decode($string, true);

// foreach ($items as $key => $item) {
// 	if($item['id'] == $id)
// 		unset($items[$key]);
// }

// $items_json_string = json_encode($items, JSON_PRETTY_PRINT);

// $file = fopen("items.json","w");
// fwrite($file, $items_json_string);
// fclose($file);

header("location: index.php");
?>