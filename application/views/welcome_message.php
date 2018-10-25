<!DOCTYPE HTML>
<html>
<head>
<title>ESPACE ESIS</title>
<link href="<?php echo base_url("assets\css\style.css");?>" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
<!--google fonts-->
<link rel="stylesheet" href="<?=base_url("assets\css\font-awesome.min.css")?>">
<link rel="stylesheet" href="<?=base_url("assets\css\j-forms.css")?>">

<script src="<?=base_url("assets\js\jquery.1.11.1.min.js")?>"></script>
	<script src="<?=base_url("assets\js\jquery.ui.min.js")?>"></script>
	<script src="<?=base_url("assets\js\jquery.ui.timepicker.min.js")?>"></script>
	<script src="<?=base_url("assets\js\jquery.ui.touch-punch.min.js")?>"></script>
	<script src="<?=base_url("assets\js\jquery.maskedinput.min.js")?>"></script>
	<script src="<?=base_url("assets\js\jquery.validate.min.js")?>"></script>
	<script src="<?=base_url("assets\js\jquery.form.min.js")?>"></script>
	<script src="<?=base_url("assets\js\j-forms.min.js")?>"></script>
</head>
<body>
<!--header strat here-->
<div class="element">
	 <h1>ESPACE ESIS</h1>
	 
	<div class="wrapper">

		<form action="j-folder" method="post" class="j-forms j-multistep" id="j-forms" novalidate>

			
			<!-- end /.header-->

			<div class="content">

				<fieldset>
					<h2>Formulaire d'inscription</h2>
					<div class="unit">
						<div class="input">
							<label class="icon-right" for="name">
								<i class="fa fa-user"></i>
							</label>
							<input type="text" id="name" name="nom" placeholder="Entrez le nom">
						</div>
					</div>
					<div class="unit">
						<div class="input">
							<label class="icon-right" for="name">
								<i class="fa fa-user"></i>
							</label>
							<input type="text" id="name" name="post" placeholder="Entrez le post-nom">
						</div>
					</div>
					<div class="unit">
						<div class="input">
							<label class="icon-right" for="name">
								<i class="fa fa-user"></i>
							</label>
							<input type="text" id="name" name="prenom" placeholder="Entrez le prenom">
						</div>
					</div>
					<div class="j-row">
						<div class="span6 unit">
							<div class="input">
								<label class="icon-right" for="email">
									<i class="fa fa-envelope-o"></i>
								</label>
								<input type="email" id="email" name="email" placeholder="your email">
							</div>
						</div>
						<div class="span6 unit">
							<div class="input">
								<label class="icon-right" for="phone">
									<i class="fa fa-phone"></i>
								</label>
								<input type="text" id="phone" name="phone" placeholder="phone/mobile">
							</div>
						</div>
						<div class="span6 unit">
							<input type="submit" class="btn" value="valider">
						</div>
					</div>
				</fieldset>
			</div>
		</form>
	</div>
</div>
<style>
	.btn{
		border: none;
		color: #fff;
		background-color: rgb(0, 162, 232);
		padding : 2% 2%;
		width: 20%;
	}
</style>
<div class="copy-right">
	<p>© Copyright <?=date('Y')?> | Espace Esis</p>
</div>

</body>
</html>