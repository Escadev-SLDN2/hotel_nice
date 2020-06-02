<?php require('views/templates/header.php'); ?>

<div class="container">
    <h1>Liste des chambres</h1>

    <?php foreach ($chambres as $chambre) : ?>
        <section class="row reverse">
            <div class="block-content large-block span-bold color-sky">

                <!--Type de Chambre-->
                <h2><?php echo ucfirst($chambre['type']); ?></h2>

                <!--Description-->
                <div>
                    <?php echo $chambre['description']; ?>
                </div>

                <!--Service-->
                <div>
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

                <!--Réservation -->
                <div class="etat-reserv">
                    <?php if ($chambre['etat'] == 'disponible') {
                        echo "<span class='bold valid'>" . ucfirst($chambre['etat']) . "</span>";
                        } else {
                        echo "<span class='bold unvalid'>" . ucfirst($chambre['etat']) . "</span>"; } ?>
                    <button class="btn-reserv" type="button" id="btnReserv">Réserver</button>
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