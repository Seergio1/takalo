<div class="box-liste-card">
    <?php for ($i=0; $i < count($data); $i++) { ?>
        <div class="card-item">
            <div class="card-element">
                <?php $myString = ($data[$i]['photo']) ;?>
                <?php $rep = explode(',',$myString);?>
                <img class="img" src="<?php echo site_url("/assets/image/".$rep[0] );?>" >
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
                <a href="<?php echo site_url("/AccueilCtrl/index");?>?idProduit=<?php echo $data[$i]['id']; ?>">
                    Voir plus
                </a>
            </div>
        </div>
    <?php } ?>
</div>