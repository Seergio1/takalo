<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href= "<?php echo site_url("/assets/css/accueil.css"); ?>" >
	<link rel="stylesheet" type="text/css" href= "<?php echo site_url("/assets/fontawesome-5/css/all.css"); ?>">
	<title>Categorie</title>
</head>

<body>
	<div class="nav">

		<div class="logo"><a href="#"><div>LO</div>GO</a></div>

		<div class="item-nav"><a href="<?php echo site_url("/GetAllCategorieCtrl/getAllCat"); ?>">HOME</a></div>
		
		<div class="item-nav"><a href="<?php echo site_url("/StatistiqueCtrl/index"); ?>">STATISTIQUES</a></div>


		<div class="item-nav"><a href="<?php echo site_url("/Disconnect/index"); ?>"><i style="color : red ;">DECONNECTION</i><i class="fas fa-user"></i></a></div>

		<div id="icon_bar">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
		
	</div>
	<div class="secret-nav-bar">
		

		<div class="secret-item-nav"><a href="<?php echo site_url("/GetAllCategorieCtrl/getAllCat"); ?>">HOME</a></div>
		
		<div class="secret-item-nav"><a href="<?php echo site_url("/StatistiqueCtrl/index"); ?>">STATISTIQUES</a></div>

		<div class="secret-item-nav"><a href="#">SE DECONNECTER</i></a></div>
	</div>
