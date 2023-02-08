<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href= "<?php echo site_url("/assets/css/index.css"); ?>" >
	<link rel="stylesheet" type="text/css" href= "<?php echo site_url("/assets/fontawesome-5/css/all.css"); ?>">
	<title>login</title>
</head>
<body>
	<div class="box-sign">
		<div class="left">
			<div class="logo">LOGO</div>
			<div class="msg-accueil">
				<div class="entete">
					<div>Bienvenue</div>
					<div>sur notre site.</div>
				</div>
				<div class="texte">
					Nous sommes ravis de<br> vous accueillir parmi nous.
				</div>
			</div>
			<div class="partie-createur">
				<div class="img"></div>
				<div class="info-createur">
					<div class="nom">Sergio</div>
					<div class="role">Affichage</div>
				</div>
			</div>
			<div class="coulisse">
					<div class="point active"></div>
					<div class="point"></div>
					<div class="point"></div>
			</div>
		</div>
		<form action=" <?php echo site_url("/UtilisateurCtrl/checking");?> " method="post" class="right">
			<h2>Sign in</h2>
			<div class="item-sign">
				<label>Email</label>
				<input type="email" id="email" name="email" value="jeremie@gmail.com" required>
			</div>
			<div class="item-sign">
				<label>Password</label>
				<input type="password" id="pwd" name="pwd" value="jAdmin" required>
			</div>
			<div class="item-sign">
				<input type="submit" id="btnSign" value="Connect">
			</div>
			<div class="item-sign">
				<a href="<?php echo site_url("/IndexCtrl/index");?>">S'incrire</a>
			</div>
		</form>
	</div>
	<script type="text/javascript" src="<?php echo site_url("/assets/js/app.js");?>"></script>
</body>
</html>