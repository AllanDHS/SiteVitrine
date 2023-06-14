<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>


<div class="article">
    <div class="contain">

        <?php


        $limit = 6;

        $i = 1;


        foreach ($dataMouse as $mouse) {
            if ($i > $limit) {
                break;
            }

        ?>

            <div class="container">
                <div class="produit">
                    <img src="<?= $mouse['image'] ?>" alt="Souris">
                    <div class="desc">
                        <p><b>Marque :</b><?= $mouse['brand'] ?></p>
                        <ul>
                            <li><b>Modeles:</b><?= $mouse['name'] ?></li>
                            <li><b>wireless :</b> <?= $mouse['wireless'] ?></li>
                            <li><b>RGB :</b> <?= $mouse['rgb'] ?></li>
                            <li><b>Poids :</b> <?= $mouse['weight'] ?></li>
                            <li><b>Prix :</b> <?= $mouse['price'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>
<?php include "components/footer.php" ?>