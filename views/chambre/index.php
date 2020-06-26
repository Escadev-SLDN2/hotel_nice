<?php require('views/templates/header.php'); ?>

<h1>Chambres</h1>
<div class="container">

    <?php foreach ($types as $type) : ?>
        <section class="row reverse">
            <div class="block-content large-block span-bold color-sky">

                <!--Type de Chambre-->
                <h2><?php echo ucfirst($type['nom']); ?></h2>

                <!--Description-->
                <div>
                    <?php echo $type['description']; ?>
                </div>

                <!--Service-->
                <div class="service">
                    <ul><span class="h-service">Services :</span>
                        <?php $services = explode(';', $type['services']); 
                        foreach($services as $service) : ?>
                            <li class="li-service"><?php echo ucfirst($service) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!--Saisons et Tarif-->
                <div class="tarif">
                    <ul>
                        <li class="season low"> Basse saison : <?php echo number_format($type['tarif1'], 0, ',', ' '); ?> &euro; </li> 
                        <li class="season moderate"> Moyenne saison : <?php echo number_format($type['tarif2'], 0, ',', ' '); ?> &euro; </li> 
                        <li class="season hot"> Haute saison : <?php echo number_format($type['tarif3'], 0, ',', ' '); ?> &euro; </li> 
                    </ul>
                </div>

                <!--Réservation -->
                <div class="etat-reserv">
                    <p>
                        x disponibles
                        <button class="button" type="button" id="btnReserv">Réserver</button>
                    </p>
                </div>

            </div>

            <!--Image-->
			<div class="block-content medium-block">
                <img src="<?php echo SITE_DIR; ?>assets/img/<?php echo $type['img']; ?>" alt="<?php echo $type['nom']; ?>" />
            </div>
        </section>
    <?php endforeach; ?>

</div>

<?php require('views/templates/footer.php'); ?>