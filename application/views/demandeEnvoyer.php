<div class="box-envoyer">
    <h2>Demande envoyé</h2>
    <?php for ($i=0; $i < count($data1); $i++) { ?>
        <div class="box-item-envoyer">
            <div class="all-item-envoyer">
                <div class="item-envoyer">
                    <div class="Label">Produit demandé : </div>
                    <div class="demander"> <?php echo $data1[$i]['titre']; ?> (<?php echo $data1[$i]['prix']; ?> Ar)</div>
                </div>
                <div class="item-envoyer">
                    <div class="Label">Produit proposé : </div>
                    <div class="demander"> <?php echo $data2[$i]['titre']; ?> (<?php echo $data2[$i]['prix']; ?> Ar)</div>
                </div>
            </div>
            <div class="item-annuler">
                <a href="<?php echo site_url("/EchangeCtrl/annuler")?>?idEchange=<?php echo $data3[$i]; ?>">Annuler</a>
            </div>
        </div>
    <?php } ?>
</div>