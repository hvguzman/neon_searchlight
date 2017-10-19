<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>NEON_SEARCHLIGHT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/album.css">
</head>
<body>
    <!-- <a href="http://www.creativebloq.com/web-design/25-websites-use-minimalism-91516685">Check</a>
    <a href="http://bashooka.com/inspiration/e-commerce-product-page-card-ui-designs/">These</a>
    <a href="https://blog.hubspot.com/marketing/product-pages-love-list">Out</a>
    <a href="http://bashooka.com/coding/challenging-game-that-will-test-your-javascript-skills/">YO</a>
    <a href="https://de.k2snowboarding.com/">Sporty</a>
    <a href="http://www.vandelaydesign.com/well-designed-ecommerce-websites/">Fucking awesome</a>
    <a href="https://icons8.com/icon/pack/city/all">ICONS</a> -->
    
    <!-- <h1 href="#" class="">static_winter 2017</h1> -->
    
    <?php require_once('partials/header.php'); ?>
    <div class="imgcontainer bg scanlines" id="scan">
    <img class="img-fluid bg" src="img/indexedit.jpg">
    <!-- <button class="indexbtn1 btn-dark"><h4>Gear up.</h4></button> -->
    <button class="btn-secondary indexbtn2" onclick='removeScanlines()'><h4></h4></button>
    <!-- <button class="indexbtn3 btn-success"><h4>Turn heads.</h4></button> -->
    <a href="#"><button class="indexbtn4 btn-primary"><h4 class="splashimg">> static_winter 2017</h4><p class="splashimg">Cutting edge cool. <i>Brr.</i></p></button></a>
    </div>
<hr>

    <?php require_once('partials/footer.php'); ?>
</body>
</html>