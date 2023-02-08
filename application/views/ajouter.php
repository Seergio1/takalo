<form enctype="multipart/form-data" class="ajoutForm" method="post" action="<?php echo site_url("/ObjetCtrl/ajouter"); ?>">
    <h1>Ajout</h1>
        <input id="nom" type="text" name="nom" placeholder="Entrez le nom du produit" required>
    <select id="Categorie" name="categorie"> 
            <option value="" disabled selected hidden>Catégorie</option>
            <?php for ($i=0; $i < count($dataS) ; $i++) { ?>
                <option value="<?php echo $dataS[$i]['id']; ?>"><?php echo $dataS[$i]['nom']; ?></option>
            <?php } ?>
    </select>
    <input id="photo" type="file" name="avatar[]" multiple/>

    <input type="hidden" name="MAX_FILE_SIZE" value="20000">

    <input id="prix" type="text" name="prix" placeholder="Entrez un prix" required>
    <textarea placeholder="Ajouter une déscription" name="desc">
        
    </textarea>
    

    <input name="envoyer" type="submit" value="Valider">
</form>