<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href= "<?php echo site_url("/assets/css/accueil.css"); ?>" >
	<link rel="stylesheet" type="text/css" href= "<?php echo site_url("/assets/fontawesome-5/css/all.css"); ?>">
	<title>Takalo</title>
</head>
<body>
	<div class="nav">

		<div class="logo"><a href="#"><div>LO</div>GO</a></div>

		<div class="item-nav"><a href="<?php echo site_url("/AccueilCtrl/accueilClient"); ?>">HOME</a></div>
		
		<div class="item-nav"><a href="<?php echo site_url("/ObjetCtrl/inserer"); ?>">AJOUTER</a></div>

		<div class="item-nav"><a href="<?php echo site_url("/EchangeCtrl/listeDemande"); ?>">DEMANDE ENVOYE</a></div>
		
		<div class="item-nav"><a href="<?php echo site_url("/EchangeCtrl/listeRecu"); ?>">DEMANDE RECU</a></div>

		<div class="item-nav"><a href="<?php echo site_url("/ObjetCtrl/mesObjets"); ?>">MES OBJETS</a></div>

		<form action="<?php echo site_url("/searchCtrl/index"); ?>"" method="">
			<div  class="search_bar">
				<select id="idCat" name="idCat">
					<option value="" disabled selected hidden>Catégorie</option>
		        	<?php for ($i=0; $i < count($dataS) ; $i++) { ?>
                		<option value="<?php echo $dataS[$i]['id']; ?>"><?php echo $dataS[$i]['nom']; ?></option>
            		<?php } ?>
				</select>
				<div class="box-search-bar">
					<input type="text" name="search" placeholder="Tapez votre recherche">
					<button type="submit"><i class="fas fa-search" ></i></button>
				</div>
			</div>
		</form>

		<div class="item-nav"><a href="<?php echo site_url("/Disconnect/index"); ?>"><i class="fas fa-user"></i></a></div>

		<div id="icon_bar">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
		
	</div>
	<div class="secret-nav-bar">
		
		<form action="<?php echo site_url(""); ?>" method="">
			<div class="secret_search_bar">
				
				<select id="Categorie" name="Categorie">
					<option value="" disabled selected hidden>Catégorie</option>
		        	<option value="">Vetement</option>
		        	<option value="">CD</option>
				</select>		
				<div class="box-search-bar">
					<input type="text" name="search" placeholder="Tapez votre recherche">
					<i class="fas fa-search"></i>
				</div>
			</div>
		</form>

		<div class="secret-item-nav"><a href="<?php echo site_url("/AccueilCtrl/accueilClient"); ?>">HOME</a></div>
		
		<div class="secret-item-nav"><a href="<?php echo site_url("/ObjetCtrl/inserer"); ?>">AJOUTER</a></div>

		<div class="secret-item-nav"><a href="<?php echo site_url("/EchangeCtrl/listeDemande"); ?>">DEMANDE ENVOYE</a></div>
		
		<div class="secret-item-nav"><a href="<?php echo site_url("/EchangeCtrl/listeRecu"); ?>">DEMANDE RECU</a></div>

		<div class="secret-item-nav"><a href="<?php echo site_url("/ObjetCtrl/mesObjets"); ?>">MES OBJETS</a></div>

		<div class="secret-item-nav"><a href="<?php echo site_url(""); ?>">SE DECONNECTER</i></a></div>
	</div>