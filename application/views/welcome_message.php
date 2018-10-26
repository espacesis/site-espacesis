<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Credit Card Donation Form Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Card Donation Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('assets\css\style.css');?>" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
	<div class="main">
		<h1>Credit Card Donation Form</h1>
		<?php echo form_open('welcome/query_to_membre');?> 
		<div class="w3_agile_main_grids">
		
			<div class="agileits_w3layouts_main_grid">
				<div class="agile_main_grid_left">
						<input type="text" name="nom" placeholder="First Name" required="">
						<input type="text" name="post-nom" placeholder="Last Name" required="">
						<input type="text" name="matricule" placeholder="matricule" required="">
						<select id="w3_agileits_select1" class="w3layouts_select" name="promotion" onchange="change_country(this.value)" required="">
							<option value="">Preparatoire</option>
							<option value="">G1</option>
							<option value="">G2</option> 
							<option value="">G3</option>									
						</select><br>
						<input type="submit" value="send-view" required="">
				</div>
			</div>
		</div>
		<?php echo form_close();?>
	</div>					
	<script src="js/creditCardValidator.js" type="text/javascript"></script>
	<!-- //Validator -->  

</body>
</html>