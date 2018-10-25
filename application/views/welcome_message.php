<!DOCTYPE html>
<html>
<head>
<title>ESPACE ESIS</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
	<div class="main">
		<h1>Credit Card Donation Form</h1>
		<form action="#" method="post"> 
		<div class="w3_agile_main_grids">
		
			<div class="agileits_w3layouts_main_grid">
				<div class="agile_main_grid_left">
					
						<h3>Your Details :</h3>
						<input type="text" name="First Name" placeholder="First Name" required="">
						<input type="text" name="Last Name" placeholder="Last Name" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Last Name" placeholder="Organization" required="">
						<input type="text" name="Phone Number" placeholder="Address" required="">
						
						<select id="w3_agileits_select1" class="w3layouts_select" onchange="change_country(this.value)" required="">
							<option value="">Country</option>
							<option value="">America</option>
							<option value="">Bhutan</option> 
							<option value="">China</option>		
							<option value="">Europe</option>
							<option value="">Other</option>							
						</select>
						<select id="w3_agileits_select1" class="w3layouts_select" onchange="change_country(this.value)" required="">
							<option value="">City</option>
							<option value="">NewYork</option>
							<option value="">Boston</option> 
							<option value="">Washington</option>		
							<option value="">Chicago</option>
							<option value="">Other</option>							
						</select>
						<input type="text" name="Phone Number" placeholder="Phone Number" required="">
						<textarea name="Message" placeholder="Comments..." required=""></textarea>
					
					</div>
					
					<div class="clear"> </div>
					
			</div>
		</div>
		</form>
		<div class="agileits_copyright">
			<p>© Copyright <?=date('Y')?> | Espace Esis</p>
		</div>
	</div>
	<!-- Validator js -->  
	<script src="assets/js/creditCardValidator.js" type="text/javascript"></script>
	<!-- //Validator -->  

</body>
</html>