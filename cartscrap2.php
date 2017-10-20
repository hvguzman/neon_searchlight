"
	<img style='height:10%; width:10%;' src='$productImg' alt='Image here'>
	<br><h4>$productName</h4>
	<br><h6>$productDesc</h6>
	<br><h6>Order quantity:</h6><input type='number' min='1' name='quantity' id='quantity' class='list-group-item' placeholder='$quantity' required>
	<br>
		<h6>Subtotal: </h6>".'<h6>'.($productPrice*$quantity).'</h6>'.'<br>'.
		"<a href='product1.php'><button class='btn btn-outline-primary'>Back to _runs</button></a>" .
		"<a href='product2.php'><button class='btn btn-outline-primary'>Back to _kicks</button></a>" .
		"<br> <a href='?remove=$id'><button class='btn btn-outline-danger'>Remove from cart</button></a>" .
		"<a href='confirmcart.php'><button class='btn btn-outline-success'>Make 'em yours.</button></a><hr>
		"