	<div class="content">
		<a class="btnAjouter" href="#" onclick="afficheModale2()">Ajouter</a>
		<!-- table template -->
		<div class="table">
			<table>
				<caption>Liste des produit</caption>
				<thead>
				    <tr>
				      <th scope="col">N°</th>
				      <th scope="col">Categorie</th>
				      <th scope="col"></th>
				      <th scope="col"></th>
				    </tr>
				</thead>
				<tbody>
					<?php for ($i=0; $i < count($data) ; $i++) { ?> 
				    	<tr>
				      		<td data-label="N°"><?php echo $i + 1 ?></td>
				     		<td data-label="Categorie"><?php echo $data[$i]['nom']; ?></td>
							
				    		<td data-label=""><a class="supp" href="<?php echo site_url("/CategorieCtrl/delete"); ?>?id=<?php echo $data[$i]['id']; ?>">SUPPRIMER</a></td>
				      		<td data-label="">
							
								<a class="modif" onclick="afficheModale(<?php echo $data[$i]['id']; ?>)" href="#">MODIFIER</a>
							</td>
						</tr>
					<?php } ?>

				    
				  </tbody>
			</table>
		</div>
		



		<!-- table template -->

		<!-- modale template-->
		<!-- modifier -->
		<form action="<?php echo site_url("/CategorieCtrl/update");?>" class="box-modifier" id="box-modifier" method="get">
	      <h2>Modifier catégorie</h2>
	      <div class="modify-item">
	        <input type="text" name="nom" placeholder="Entrez le nouveau nom">
	        <input type="submit" value="Valider">
	      </div>
	    </form>

		<!-- ajouter -->
	    <form action="<?php echo site_url("/CategorieCtrl/insert");?>" class="box-ajouter" id="box-ajouter" method="get">
	      <h2>Ajouter catégorie</h2>
	      <div class="modify-item">

	        <input type="text" name="nom" placeholder="Entrez le nouveau nom">
	        <input type="submit" value="Valider">
	      </div>
	    </form>


	</div>