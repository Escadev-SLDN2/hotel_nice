<?php require('views/templates/header.php'); ?>

<div class="container">
    <h1>Liste des chambres</h1>

    <?php foreach ($chambres as $chambre) : ?>
        <section class="row reverse">
            <div class="block-content large-block color-sky">

                <!--Type de Chambre-->
                <h2><?php echo ucfirst($chambre['type']); ?></h2>

                <!--Description-->
                <div class="description">
                    <?php echo $chambre['description']; ?>
                </div>

                <!--Service-->
                <div class="tarif">
                    <ul><span class="bold">Services :</span>
                    <?php
                    $services = explode(';', $chambre['services']); 
                    foreach($services as $service) : ?>
                        <li><?php echo ucfirst($service) ?></li>
                    <?php endforeach; ?>
                    </ul>
                </div>

                <!--Saisons et Tarif-->
                <div class="tarif">
                    <p><span class="bold">Basse saison</span> <?php echo number_format($chambre['tarif1'], 0, ',', ' '); ?> &euro;
                    <span class="bold">/ Moyenne saison :</span> <?php echo number_format($chambre['tarif2'], 0, ',', ' '); ?> &euro;
                    <span class="bold">/ Haute saison :</span> <?php echo number_format($chambre['tarif3'], 0, ',', ' '); ?> &euro;</p>
                </div>

                <!--Image-->
                <div class="etat-reserv">
                    <?php echo $chambre['etat']; ?>
                    <button type="button" id="btnReserv">Réserver</button>
                </div>

            </div>

            <!--Image-->
			<div class="block-content medium-block">
                <img src="<?php echo SITE_DIR; ?>assets/img/<?php echo $chambre['img']; ?>" alt="<?php echo $chambre['type']; ?>" />
            </div>
        </section>
    <?php endforeach; ?>

</div>

<?php require('views/templates/footer.php'); ?>