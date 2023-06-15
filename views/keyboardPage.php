<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>


<div class="articleKey">
    <div class="containKey">

        <?php


        $limit = 6;
        $i = 1;


        foreach ($data[1] as $keyboard) {
            if ($i > $limit) {
                break;
            }

        ?>

            <div class="containerKey">
                <div class="produitKey">
                    <img src="<?= $keyboard['image'] ?>" alt="Souris" class="keyboard">
                    <div class="desc">
                        <p><b>Marque :</b><?= $keyboard['brand'] ?></p>
                        <ul>
                            <li><b>Modele : </b><?= $keyboard['name'] ?></li>
                            <li><b>wireless :</b> <?= $keyboard['wireless'] ?></li>
                            <li><b>RGB : </b> <?= $keyboard['rgb'] ?></li>
                            <li><b>switch : </b> <?= $keyboard['switch'] ?></li>
                            <li><b>Prix : </b> <?= $keyboard['price'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>








<?php include "components/footer.php" ?>