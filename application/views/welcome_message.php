<!DOCTYPE html>
<html>
<head>
<title>ESPACE ESIS</title>
<!--css-->
<link href="<?php echo base_url("assets/css/style1.css"); ?>" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url("assets/css/jquery.countdown.css") ?>" />
<!--/css-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
<!--fonts-->
<script src="<?php echo base_url("assets/js/jquery-1.11.1.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/js/jquery.countdown.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/script.js"); ?>"></script>
</head>
<body>
<style>
	.card {
		position : inherit;
		margin-left: 20%;
		width : 60%;
		background-color : rgba(8, 51, 116, 0.7);
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		transition: 0.3s;
	}
	.card h4{
		text-align: center;
		font-size: 2em;

	}
	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}

	.container {
		padding: 2px 16px;
	}
	input[type="text"],input[type="password"]{
    	padding: 2% 3%;
    	width: 40%;
		border: none;
	}
	select{
		padding: 2% 3%;
    	width: 35%;
	}
    input[type="submit"]{
    	padding: 1% 2%;
    	border: none;
    	background-color: rgb(0, 162, 232);
		color: #fff;
		width: 20%;
    }
    input[type="submit"]:hover{
    	border: solid 1px;
    	border-color: rgb(0, 162, 232);
	}
	a {
		text-decoration : none;
		color : rgb(0, 162, 232);
	}
</style>
<div class="content">
	<h2>ESPACE ESIS</h2><br>
	<div class="card">
		<br><h4>Connexion</h4><br>
		<div class="container">
			<?php echo form_open('login');?>
				<input type="text" name="matricule" placeholder="Matricule : " required=""><br><br>
				<input type="password" name="mdp" placeholder="Mot de passe : " required=""><br><br><br>
				<input type="submit" value="valider">
				<br><br><br>
			<?php echo form_close();?>
			<p>Vous n'avez pas de compte ? cliquer sur le lien <a href="<?php echo base_url("new_compte"); ?>">créer</a> pour vous enregistrer </p>
			<br><br><br>
		</div>
	</div>
</div>
<br>
<!--/content-->
<div class="content-bottom">
	<div class="copy-rights">
		<p style="color:#F5EFEB;">© Copyright <?php echo date('Y'); ?> | ESPACE ESIS</p>
	</div>
</div>
</body>
</html>