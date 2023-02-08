<form class="modiftForm" method="get" action="<?php echo site_url("/ObjetCtrl/modifier"); ?>">
    <h1>Modifier</h1>
        <input id="nom" type="text" name="nom" value="<?php echo $data['titre'];?>">
    <input id="prix" type="text" name="prix" value="<?php echo $data['prix'];?>">
    <input type="hidden" name="id" value="<?php echo $data['id'];?>">
    <textarea name="description" value=""><?php echo $data['description'];?>
    </textarea>
    <input id="btn_modif" type="submit" value="Valider">
</form>