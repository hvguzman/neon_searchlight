<?php 
session_start();
require "connection.php";
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";
function display_cart(){
if(isset($_GET['remove'])){
	$remove_id = $_GET['remove'];
	unset($_SESSION['cart'][$remove_id]);
	header("location: displaycart.php");
}
require "connection.php";
if($_SESSION['cart'] == NULL){
	echo"<h1>Cart is empty.</h1>";
}else{
foreach ($_SESSION['cart'] as $id => $quantity) {
	$sql = "SELECT * FROM products WHERE id = '$id'";
	$result = mysqli_query($conn,$sql);
	$result = mysqli_fetch_assoc($result);
	extract($result);
	$subtotal = ($productPrice*$quantity);
	echo "<div class='col-12 float-left'>
	<img style='height:30%; width:30%;' src='$productImg' alt='Image here'>
	<br><h4>$productName</h4>
	<br><h6 class='col-6'>$productDesc</h6>
	<br><h6>Order quantity:</h6><input type='number' min='1' name='quantity' id='quantity' class='list-group-item' placeholder='$quantity' required>
	<br>
		<h6>Subtotal: </h6>".'<h6>'.$subtotal.'</h6>'.
		"<a href='?remove=$id'><button class='btn btn-outline-danger'>Remove from cart</button></a><br></div>";
}}}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Display Cart</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<link rel="stylesheet" type="text/css" href="css/sticky-footer.css">
 </head>
 <body>
 	<?php require_once('partials/header.php'); ?>
 	<h1>Shopping Cart</h1>
  <form method = 'POST' action='confirmcart.php'>
 	<?php if ($username!="admin"){display_cart();} ?>

    <a href="#"><nav id="cart" class="col-md-5 text-center nav navbar">
 	<div class='totals'>
    <div class='totals-item'>
      <label>Subtotal</label>
      <div class='totals-value' id='cart-subtotal'><?php ?></div>
    </div>
    <div class='totals-item'>
      <label>Tax (5%)</label>
      <div class='totals-value' id='cart-tax'></div>
    </div>
    <div class='totals-item'>
      <label>Shipping</label>
      <div class='totals-value' id='cart-shipping'>500.00</div>
    </div>
    <div class='totals-item totals-item-total'>
      <label>Grand Total</label>
      <div class='totals-value' id='cart-total'>90.57</div>
    </div>
  </div>
      
      <a href='#'><button class='btn btn-outline-secondary col-2'><span class="fa fa-arrow-up"></span></button></a>
      <a href='confirmcart.php'><button type = 'submit' class='btn btn-outline-success col-12'>Checkout.</button></a>
  </form>
 <a href="product1.php" class='btn btn-outline-primary'>Go back to _runs.</a>
 <a href="product2.php" class='btn btn-outline-primary'>Go back to _kicks.</a>
</nav>

</div>
 	<?php if ($username == "admin"){echo"<h1>You cannot make purchases with this account.</h1>";} ?>

 <script type="text/javascript">
 	/* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;


/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});


/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}
 </script>
 </body>
 </html>