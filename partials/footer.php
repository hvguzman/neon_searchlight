<?php 
// session_start();
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>FOOTER</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/sticky-footer.css">
</head>
<body>

<h1 class="col-8">Follow Us://</h1>
<div class="float-left" id="social-media">
<h2>
<a href="www.facebook.com"><span class="fa fa-lg fa-facebook-square"></span></a>
<a href="www.twitter.com"><span class="fa fa-lg fa-twitter-square"></span></a>
<a href="www.instagram.com"><span class="fa fa-lg fa-instagram"></span></a>
</div>
</h2>
    <div class="carousel slide col-12" data-ride="carousel" style="width: 100%;">
    <div class="carousel-inner updateleft" role="listbox">
    <div class="carousel-item active">
      <!-- <img class="d-block img-fluid" src="img/980x400r.png" alt="First slide"> -->
      <img class="updatebox" src="img/200x200.png">
      <blockquote class="blockquote">
        <h5>That's what he said.</h5>
        <p class="mb-0">People ask me if I wear this helmet everywhere. I do. Yeah, even when I take a shower. That's how good this gear is.<a href="https://twitter.com/" class="readmore"><span  class="fa fa-twitter"></span>Follow Guy @edmpunk.</a></p>
        <footer class="blockquote-footer">Guy from <cite title="Source Title">Dat Punk</cite></footer>
      </blockquote>
    </div>
    <div class="carousel-item">
      <!-- <img class="d-block img-fluid" src="img/980x400.png" alt="Second slide"> -->
      <img class="updatebox" src="img/200x200b.png">
      <blockquote class="blockquote">
        <h5>That's what it said.</h5>
        <p class="mb-0">01100011 01111001 01100010 01100101 01110010 01110000 01110101 01101110 01101011 00100000 01101001 01110011 00100000 01101100 01101001 01100110 01100101 01001100 01101111 01110010 01100101 01101101 00100000 01101001 01110000 01110011 01110101<a href="https://twitter.com/" class="readmore"><span  class="fa fa-twitter"></span>Follow ゴースト @ghost.</a></p>
        <footer class="blockquote-footer">ゴースト in <cite title="Source Title">シェル</cite></footer>
      </blockquote>
    </div>
    <div class="carousel-item">
      <!-- <img class="d-block img-fluid" src="img/980x400s.png" alt="Third slide"> -->
          <img class="updatebox" src="img/200x200y.png">
        <blockquote class="blockquote">
        <h5>That's what she said.</h5>
        <p class="mb-0">Right, hey kids if you’re a fashion-conscious young hood, remember that cute girl won’t even look your way unless you knock over an Astral Gate. Do it today! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="https://twitter.com/" class="readmore"><span  class="fa fa-twitter"></span>Follow Faye @bountyhunter.</a></p>
        <footer class="blockquote-footer">Faye in <cite title="Source Title">Red Tail</cite></footer>
      </blockquote>
    </div>
  </div>
</div>

<!-- Navigation -->
<div id="sidenav" class="col-md-4 text-center scanlines">
    <h6 class="fa"><a href="#" class="w3-bar-item w3-button"><span class="fa fa-arrow-up"></span>Back to top</a></h6>
  <div class = "searchbar">
        <div class="log">
            <form class="form-inline my-2 my-lg-0">
  <a href="product1.php">_runs</a>
  <a href="product2.php">_kicks</a>
              <input class="form-control float-right col-12" id="sbar" type="text" placeholder="Looking for something?">
              <button class="btn btn-outline-primary float-right col-12" type="submit" id="sbut"><span class="fa fa-search"></span></button>
				<span>Hannah Vania Guzman &copy; 2017</span>
            </form>
        </div>
      </div>
</div>


<!-- view cart -->
<a href="displaycart.php"><nav id="cart" class="col-md-5 text-center nav navbar scanlines">
  <span class="fa fa-shopping-cart"></span><h4>View Cart</h4>
</nav></a>
	<footer class="footer">
        <span></span>
    </footer>



</body>
</html>