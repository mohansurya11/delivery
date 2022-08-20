

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="main2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/script.js"></script>



</head>
<body>

<div class="col-12" style="height: 350px">
	<div id="comname">
		<br><br><b style="font-size: 40px; color: darkblue; text-align: center;">RAPID DELIVERY SERVICE</b>
	</div>
	<div id="nav" class="col-12">
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="about.php">About</a></li>
		  
		  <li><a class="active" href="details.php">Details</a></li>
		  
		</ul>
	</div>
	
	<img class="myFrontPic col-12" src="img1.png" style="height: 350px;">
</div>
	<div style="margin: 0; padding: 0 3% 0 7%; text-align: center;">
		
				<form>
					<label><p style="font-size: 40px; color: darkblue;">Enter Tracking Number</p></label>
					<select name="sss">
						<option value="">Track</option>
						
						
					</select>
				</form>
			</div>
			<div id="txtHint" style="padding: 5% 0 5% 0; width: 100%; overflow: auto;"></div>
		</div>
	</div>


<div id="footer" class="col-12" style="margin: 0; padding: 0;overflow: auto;">
	<?php include "footer.php"; ?>
</div>



</body>


</html>