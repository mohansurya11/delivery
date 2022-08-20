
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="main2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/script.js"></script>



</head>
<body>

<div class="col-12" style="height: 650px">
	<div id="comname">
		<br><br><b style="font-size: 40px; color: darkblue; text-align: center;"> RAPID DELIVERY SERVICE</b>
	</div>
	<div id="nav" class="col-12">
		<ul>
		  <li><a class="active" href="index.php">Home</a></li>
		  <li><a href="about.php">About</a></li>
		  
		  <li><a href="details.php">Details</a></li>
		 
		</ul>
	</div>
	<span id="info1" style="color: white;">Enter Tracking Number</span>
	<div id="info" class="col-12">
		<form>
				<select name="sss"  onchange="ha(this);">
						<option value="">Track</option>
						
				</select>
		</form>
	</div>
	<img class="mySlides col-12" src="service.jpg">
	
</div>
	<div style="margin: 0; padding: 5%; text-align: center;">
		<span style="font-size: 40px;color: rgb(168, 28, 6);font-weight: bold;"><i>Welcome To Rapid Delivery Service</i></span><br><br>
		<p style="text-align: left;"><p>Rapid Delivery Service is an international courier service company.</p><p>Rapid Delivery Service is a leading International Courier, Cargo & Shipping Service provider in Mumbai.</p>
<p>The management and employees of Express Parcel Service are committed to provide the best and most cost-effective and reliable courier and logistics solutions, connecting India with the global community in the fastest and most efficient way possible. We are the international courier service providers dispatching your shipments worldwide through reputed branded couriers.</p>
		</p>
	</div>
	


<div id="footer" class="col-12" style="margin: 0; padding: 0;overflow: auto;">
	<?php include "footer.php"; ?>
</div>







<script>carousel();

</script>

</body>


</html>