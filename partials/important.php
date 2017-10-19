For user product echo
						"
						<div class='card'>
						<img class='card-img-top' src='$productImg' alt='Card image cap'>
						  <ul class='list-group list-group-flush'>
						  <form class='form-horizontal' method='POST' action='addtocart.php?id=$id'>
						  <input type='number' min='1' name='quantity' id='quantity'>
						  <button type='submit' name='addtocartbtn' id='addtocartbtn' class='btn btn-success'>Add to Cart</button>
						  </form>
						    <li class='list-group-item'><h4 class='card-title info'>$id : $productName</h4></li>
						    <li class='list-group-item'><h4 class='card-title info'>$productPrice</h4></li>
						    <li class='list-group-item'><h4 class='card-title info'>$productDesc</h4></li>
							<li class='list-group-item'><h4 class='card-title info'>pairs in stock: $productQty</h4></li>
						  </ul>
						</div>";




for fancy image carousel
    <div id="carouselExampleControls" class="carousel slide scanlines movedown" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/jumpspin4.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/airshootedited.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/colorful.png" alt="Third slide">
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
</div>