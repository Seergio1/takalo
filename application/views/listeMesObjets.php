<div class="box-liste-card">
    <?php for ($i=0; $i < count($data); $i++) { ?>
        <div class="card-item">
            <div class="card-element">
                <img class="img" src="<?php echo site_url("/assets/image/".$data[$i]['photo']."");?>">
            </div>

            <div class="card-element">
                <div class="Label"><?php echo $data[$i]['titre']; ?></div>
                <div class="titre"><?php echo $data[$i]['description']; ?></div>
            </div>

            <div class="card-element">
                <div class="Label">Prix</div>
                <div class="prix"><?php echo $data[$i]['prix']; ?> Ar</div>
            </div>

            <div class="card-element">
                <a href="<?php echo site_url("/ObjetCtrl/modifierObjet");?>?idProduit=<?php echo $data[$i]['id']; ?>">
                    Modifier
                </a>
                <a href="<?php echo site_url("/ObjetCtrl/supprimer");?>?idProduit=<?php echo $data[$i]['id']; ?>">
                    Supprimer
                </a>
            </div>
        </div>
    <?php } ?>
</div>