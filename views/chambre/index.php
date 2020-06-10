<?php require('views/templates/header.php'); ?>

<h1>Chambres</h1>
<div class="container">

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
                <div class="service">
                    <ul><span class="h-service">Services :</span>
                        <?php $services = explode(';', $chambre['services']); 
                        foreach($services as $service) : ?>
                            <li class="li-service"><?php echo ucfirst($service) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!--Saisons et Tarif-->
                <div class="tarif">
                    <ul>
                        <li class="season low"> Basse saison : <?php echo number_format($chambre['tarif1'], 0, ',', ' '); ?> &euro; </li> 
                        <li class="season moderate"> Moyenne saison : <?php echo number_format($chambre['tarif2'], 0, ',', ' '); ?> &euro; </li> 
                        <li class="season hot"> Haute saison : <?php echo number_format($chambre['tarif3'], 0, ',', ' '); ?> &euro; </li> 
                    </ul>
                </div>

                <!--Réservation -->
                <div class="etat-reserv">
                    <p>
                        <?php if ($chambre['etat'] == 'disponible') {
                            echo "&#201;tat : <span class='result valid'>" . ucfirst($chambre['etat']) . "</span>";
                            } else {
                            echo "&#201;tat : <span class='result unvalid'>" . ucfirst($chambre['etat']) . "</span>"; } ?>
                        <button class="button" type="button" id="btnReserv">Réserver</button>
                    </p>
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