<div class="box-detail">
    <div class="left">
        
                <?php $myString = ($data['photo']) ;?>
                <?php $rep = explode(',',$myString);?>
                <img class="img1" src="<?php echo site_url("/assets/image/".$rep[0] );?>" >
        <div class="box-img">
            <?php for ($i=1; $i < count($rep); $i++) { ?>
                    <img class="sous-img" src="<?php echo site_url("/assets/image/".$rep[$i] );?>" >
                <?php } ?>
        </div>

    </div>
    <div class="right">
        <div class="titre"><?php echo $data['titre']; ?></div>
        <div class="descri">
            <div class="titre-descri">Description</div>
            <div class="descri-area">
                <?php echo $data['description']; ?>
            </div>
        </div>
        <div class="item-descri">
            <a class="btn" href="<?php echo site_url("/EchangeCtrl/listeRecu");?>">Retour</a>
        </div>
    </div>
</div>