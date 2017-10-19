<?php 
session_start();
require "connection.php";
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";
function display_pics(){
  global $username;
  global $conn;
  // $sql = "SELECT * FROM products WHERE productName = '$productName'";
  $sql = "SELECT * FROM products WHERE category_id = 2";
  $result = mysqli_query($conn,$sql);
  while ($row = mysqli_fetch_assoc($result)){
    extract($row);
  foreach($result as $item){
    $id = $item['id'];
    $productName = $item['productName'];
    $productImg = $item['productImg'];
    $productImg2 = $item['productImg2'];
    $productImg3 = $item['productImg3'];
    $productPrice = $item['productPrice'];
    $productDesc = $item['productDesc'];
    $category_id = $item['category_id'];
    $productQty = $item['productQty'];
      echo"<img src='$productImg3' style='opacity:0.7; padding: 5px;
    border: solid 1px #EFEFEF;'>";
    }
  }
}
function display_items(){
	global $username;
	global $conn;
	// $sql = "SELECT * FROM products WHERE productName = '$productName'";
	$sql = "SELECT * FROM products WHERE category_id = 2";
	$result = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_assoc($result)){
		extract($row);
	foreach($result as $item){
		$id = $item['id'];
		$productName = $item['productName'];
    $productImg = $item['productImg'];
    $productImg2 = $item['productImg2'];
		$productImg3 = $item['productImg3'];
		$productPrice = $item['productPrice'];
		$productDesc = $item['productDesc'];
		$category_id = $item['category_id'];
		$productQty = $item['productQty'];
		if($username=="admin"){
			echo"
						<div class='card'>
						  <ul class='list-group list-group-flush'>
						  <form class='productform' method='POST' action='editform.php?id=$id'>
							<button type='button submit' name='editbtn' class='btn btn-primary'>Edit Product</button>
						  </form>
							<a href='addform.php'><button class='btn btn-success'>Add Product</button></a>
						  <form method='POST'  class='productform' action='delete.php?id=$id'>
							<button type='submit' name='delete' id='delete' class='btn btn-danger'>Delete Product</button>
						  </form>
						    <li class='list-group-item'><label>Product ID:</label>$id</li>
						    <li class='list-group-item'><label>Product Name:</label>$productName</li>
						    <li class='list-group-item'><label>Product Image Source:</label>$productImg</li>
						    <li class='list-group-item'><label>Price:</label>$productPrice</li>
						    <li class='list-group-item'><label>Description:</label>$productDesc</li>
						    <li class='list-group-item'><label>Category ID:</label>$category_id</li>
						    <li class='list-group-item'><label>Quantity Available:</label>$productQty</li>
						  </ul>
						</div>";
					} else {

					echo 
                        "
                          <div class='carousel-inner'role='listbox'>
                            <div class='carousel-item active'>
                              <img src='$productImg' alt='picture of products'>
                              <div class='carousel-caption d-none d-md-block'>
                                <h5 class='idname'>> $productName</h5>
                                <button class='prodbut neon1' data-toggle='modal' data-target='#$productName'><h2 class='fa fa-eye'></h2></button>
                              </div>
                            </div>
                          </div>
                        
                        <div class='modal fade'id='$productName'tabindex='-1'role='dialog'aria-labelledby='$productName'aria-hidden='true' style= 'z-index:9999999999999'>
                          <div class='modal-dialog'role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h5 class='modal-title'id='exampleModalLabel' style='color:black'>$productName</h5>
                                <button type='button'class='close'data-dismiss='modal'aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                              <div class='scanlines'>
                              <img class='card-img-top' src='$productImg2' alt='Card image cap'>
                              </div>
                              <li class='list-group-item'><h4 class='card-title info'>$productDesc</h4></li>
                              <li class='list-group-item'><h4 class='card-title info'>₱ $productPrice</h4></li>
                              <form class='form-horizontal' method='POST' action='addtocart.php?id=$id'>
                              <input type='number' min='1' name='quantity' id='quantity' class='list-group-item col-12' placeholder='How many?' required>
                              </div>
                              <div class='modal-footer'>
                              <div class='form-group'>
                              <button type='submit' name='addtocartbtn' id='addtocartbtn' class='btn btn-success'>Add to Cart</button>
                              <button type='button'class='btn btn-secondary'data-dismiss='modal'>Back</button>
                              </div>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        ";
    }
  }
  
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Runs</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/product.css">
	<link rel="script" type="text/css" href="js/product.js">
</head>
<body>
	<?php require_once('partials/header.php'); ?>
    
    <h1 class = "text-center">Pumped up kicks!</h1>
   
   <!-- left column -->

<div class="col-md-12 text-right">
   <div id="carouselExampleControls" class="carousel slide scanlines movedown row h-100 justify-content-center align-items-center" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img" src="img/airshootedited.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img" src="img/jumpspinedited.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img" src="img/colorful.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
     <h4 class='col-10 text-center'>Can you keep up?</h4>
</div>
</div>


<div class="col-md-6 text-center float-right">
    <?php display_items(); ?>

</div>
<div class="col-md-6 text-center">
    <?php display_pics(); ?>
</div>
    <?php require_once('partials/footer.php'); ?>

    <script type="text/javascript">
		(function($) {
    "use strict";

    // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
    
})(jQuery);
	</script>
</body>
</html>