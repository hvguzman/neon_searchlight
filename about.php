<!DOCTYPE html>
<html>

<?php 
session_start();
if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
else
	$username = "guest";

$string = file_get_contents("items.json");
$items = json_decode($string, true);

 ?>
<head>
	<title>About Us</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/album.css">
</head>
<body>
<?php require_once('partials/header.php'); ?>

	  <!-- <div class="container"> -->
	    <div class="text-center">
	    <h4 style="color:black">we are >neon_searchlight</h4>
	    <h4 style="color:black">we are >neon_searchlight</h4>
	    <h5>re_cover</h5>
	    <h5>dis_cover</h5>
	    <h5>take_over</h5>
	    <h5>your neighborhood.</h5>
	    <h4>we are >neon_searchlight</h4>
	    </div>
      <div class="container">

        
          <div id="b1" class="card" style="color: white; background-color: black;">
            <div id="scan1" class="scanlines"><img src="img/darkblue.jpg" alt="Card image cap"></div>
            <p class="card-text text-center">Reece</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div id="b2" class="card" style="color: white; background-color: black;">
            <div id="scan2" class="scanlines"><img src="img/blueneon.jpg" alt="Card image cap"></div>
            <p class="card-text text-center">M</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut</p>
          </div>

          <div id="b3" class="card" style="color: white; background-color: black;">
            <div id="scan3" class="scanlines"><img src="img/covermouth.jpg" alt="Card image cap"></div>
            <p class="card-text text-center">Anon</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt</p>
          </div>

        </div>

      </div>
	    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
	    <h4 class='text-center'>Contact us.</h4>
	    <div id="b3" class="card col-2" style="color: white; background-color: black;">
            <div id="scan" class="scanlines"><img src="img/enter.jpg" alt="Card image cap"></div>
            <p class="card-text text-center">neon_searchlight</p>
            <p class="card-text text-right">15 Springfield Way, Manila CT21 5SH, PH</p>
            <p class="card-text text-right">09876512332</p>
            <p class="card-text text-center">Knock thrice.</p>
          </div>
          <div id="b3" class="card col-2 float-right" style="color: white; background-color: black;">
            <div id="scan" class="scanlines"><img src="img/theworld.jpg" alt="Card image cap"></div>
            <p class="card-text text-center">neon_searchlight</p>
            <p class="card-text">21 Harbour Drive, Makati BR91 9JH, PH</p>
            <p class="card-text text-left">09234567789</p>
            <p class="card-text text-center">Say please.</p>
          </div>
	    <section id="contact">
			<div class="contact-section">
			<div class="container">
				<form class='form-horizontal' action='feedback.php' method="POST">
					<div class="col-md-12 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Your name</label>
					    	<input type="text" class="form-control" id="fname" name='fname'placeholder=" Enter Name" required>
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email Address</label>
					    	<input type="email" class="form-control" id="femail" name='femail' placeholder=" youraddress@example.com" required>
					  	</div>
			  		</div>
			  		<div class="col-md-12" style="margin-bottom: 20px">
			  			<div class="form-group">
			  				<label for ="description"> Message</label>
			  			 	<textarea  class="form-control" id="fmessage" placeholder="Enter Your Message" name='fmessage' required></textarea>
			  			</div>
			  			<div>

			  				<button type="submit" class="btn btn-default submit col-12 send" name='feedback'><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
			  			</div>
			  			
					</div>
				</form>
			</div>
		</div>
	</section>
<?php require_once('partials/footer.php'); ?>
</div>
</body>
</html>