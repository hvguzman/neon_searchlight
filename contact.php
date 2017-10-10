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
	<title>Contact Us</title>
</head>
<body>
<?php require_once('partials/header.php'); ?>
	<div class="container-fluid">

		<div class="container">
		<div class="row-fluid">
	        <div class="span8">
	        	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
	    	</div>
	    	
	      	<div class="span4">
		    		<h2>Visit Us</h2>
		    		<address>
		    			<strong>CompanyName</strong><br>
		    			32 Dagohoy Road<br>
		    			Quezon City<br>
		    			NCR<br>
		    			Philippines<br>
		    			1900<br>
		    			Phone: 01234 567 890
		    		</address>
		    	</div>
		    </div>
	</div>
		
<?php require_once('partials/footer.php'); ?>
	</div>
</body>
</html>