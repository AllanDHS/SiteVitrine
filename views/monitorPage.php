<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>



<div class="article">
    <div class="contain">

        <?php


        $limit = 6;

        $i = 1;


        foreach ($data[2] as $monitor) {
            if ($i > $limit) {
                break;
            }

        ?>

            <div class="container">
                <div class="produit">
                    <img src="<?= $monitor['image'] ?>" alt="écran">
                    <div class="desc">
                        <p><b>Marque : </b><?= $monitor['brand'] ?></p>
                        <ul>
                            <li><b>Modele : </b><?= $monitor['name'] ?></li>
                            <li><b>Taille : </b> <?= $monitor['size'] ?></li>
                            <li><b>resolution : </b> <?= $monitor['resolution'] ?></li>
                            <li><b>fréquence : </b> <?= $monitor['refresh'] ?></li>
                            <li><b>Prix : </b> <?= $monitor['price'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>

















<?php include "components/footer.php" ?>