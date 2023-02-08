<div class="box-recu">
    <h2>Demande recu</h2>
    <?php for ($i=0; $i < count($data1); $i++) { ?>
        <div class="box-item-recu">
            <div class="all-item-recu">
                <div class="item-recu">
                    <div class="Label">Produit demandé : </div>
                    <div class="demander"> <?php echo $data1[$i]['titre']; ?> (<?php echo $data1[$i]['prix']; ?> Ar)</div>
                </div>
                <div class="item-recu">
                    <div class="Label">Produit proposé : </div>
                    <div class="demander"><a href="<?php echo site_url("/EchangeCtrl/detailEchange")?>?idProduit=<?php echo $data2[$i]['id']; ?>"><?php echo $data2[$i]['titre']; ?> (<?php echo $data2[$i]['prix']; ?> Ar)</a> </div>
                </div>
            </div>
            <div class="item-btn">
                <a href="<?php echo site_url("/EchangeCtrl/accepter")?>?idEchange=<?php echo $data3[$i]; ?>">Confirmer</a>
                <a href="<?php echo site_url("/EchangeCtrl/refuser")?>?idEchange=<?php echo $data3[$i]; ?>">Refuser</a>
            </div>
        </div>
    <?php } ?>
</div>